    <?php
            $temp = 'Jim';
            echo 'Welcome to the evil Tic-Tac-Toe game, '.$temp.'. Lets play!';
            
            class Game {
                
                var $position;
                
                function Game($squares){
                    $this->position = str_split($squares);
                }
                
                function show_cell($which){
                    $token = $this->position[$which];
                    
                    if($token <> '-'){ 
                        return '<td>'.$token.'</td>';
                    }
                    
                    $this-> newposition = $this->position;
                    $this-> newposition[$which] = 'o';
                    $move = implode($this->newposition);
                    
                    $link = '/?board='.$move;
                    
                    return '<td><a href="'.$link.'">-</a></td>';
                }
                
                function display(){
                    echo '<table cols="3" style="font-size:large; font-weight:bold">';
                    echo '<tr>'; //open the first row;
                    
                    for($pos=0;$pos<9;$pos++){
                        
                        echo $this->show_cell($pos);
                        
                        //start a new row for the next 
                        if($pos%3==2){ 
                            echo '</tr><tr>';
                        }
                    }
                    
                    echo '</tr>';//close the last row
                    echo '</table>';
                }
                
                function winner($token){
                    $winner = false;
                    for($row=0;$row<3;$row++){
                        $result = 0;
                        for($col=0;$col<3;$col++){
                            if($this->position[(3*$row+$col)] == $token) {
                                $result++;
                            }
                            
                        }
                        if($result == 3){
                            $winner = true;
                        }
                    }
                    for($col=0;$col<3;$col++){
                        $result = 0;
                        for($row=0;$row<3;$row++){
                            if($this->position[($col+3*$row)] == $token) {
                                $result++; 
                            }
                        }
                        
                        if($result == 3){
                            $winner = true;
                        }
                    }
                    
                    //horizontal bottom left to top right
                     if(($this->position[6] == $token) &&
                         ($this->position[4] == $token) &&
                         ($this->position[2] == $token)) {
                             $winner = true;
                     }
                     //horizontal top left to bottom right
                     else if(($this->position[0] == $token) &&
                         ($this->position[4] == $token) &&
                         ($this->position[8] == $token)) {
                             $winner = true;
                     }
                     else {
                         $winner = false;
                     }

                     return $winner;        

                }
            }
            
            $position = $_GET['board'];

            $game = new Game($position);
            $game->display();
            
            if($game->winner('x') == true ){
                echo 'You win. Lucky guesses!';
            }
            else if ($game->winner('o') == true ){
               echo 'I win. muhahahah!';
            }
            else {
                echo 'No winner yet.';
            }
    ?>
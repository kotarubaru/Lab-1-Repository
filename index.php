<?php

    $position = $_GET['board'];
    $squares = str_split($position);
    
    if(!isset($_GET['board'])) {
        echo 'no board parameter given';
    }
    
    if(winner('x',$squares)){   
        echo 'You win.';
    }
    else if(winner('o',$squares)) { 
        echo 'I win.';
    }
    else {
        echo 'No winner yet.';
    }


    function winner($token,$position) {
        $won = false;
        //r:1 horizontal
        if(($position[0] == $token) &&
           ($position[1] == $token) &&
           ($position[2] == $token)) {
            $won = true;
        }
        //r:2 horizontal
        else if(($position[3] == $token) &&
            ($position[4] == $token) &&
            ($position[5] == $token)) {
                $won = true;
        }
        //r:3 horizontal
        else if(($position[6] == $token) &&
            ($position[7] == $token) &&
            ($position[8] == $token)) {
                $won = true;
        } 
        //c:1 vertical
        else if(($position[0] == $token) &&
            ($position[3] == $token) &&
            ($position[6] == $token)) {
                $won = true;
        }
        //c:2 vertical
        else if(($position[1] == $token) &&
            ($position[4] == $token) &&
            ($position[7] == $token)) {
                $won = true;
        }
        //c:3 vertical
        else if(($position[2] == $token) &&
            ($position[5] == $token) &&
            ($position[8] == $token)) {
                $won = true;
        }
        //horizontal bottom left to top right
        else if(($position[6] == $token) &&
            ($position[4] == $token) &&
            ($position[2] == $token)) {
                $won = true;
        } 
        //horizontal top left to bottom right
        else if(($position[0] == $token) &&
            ($position[4] == $token) &&
            ($position[8] == $token)) {
                $won = true;
        } 
        else {
            $won = false;
        }
            return $won;
    }
?>



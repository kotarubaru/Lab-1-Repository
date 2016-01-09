<?php
    $name = 'Jim';
    $what = 'geek';
    $level = 10;
    
    echo 'Hi my name is ' .$name, '. and I am a level ' .$level. ' '.$what;
    
    echo '<br/>';
    
    $hoursworked = $_GET['hours'];
    $rate = 12;
    $total = $hoursworked * $rate;
    echo 'You owe me '.$total;
    
    if($hoursworked > 40) {
       $total = $hoursworked * $rate * 1.5;    
    } else {
       $total = $hoursworked * $rate;
    }
    
//    
//    if (logical expression) {
//        block to execute if true
//    } else {
//        block to execute if false
//    }
//    
//    switch (name) {
//        case 'Jim': $answer = 'great'; break;
//        case 'George': $answer = 'unknown'; break;
//        default: $answer = 'unknown';
//    }
    
?>

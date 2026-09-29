<?php 

//ZAD15

    for($i = 0; $i <=1000; $i++){
        if ($i % 3 == 0 && $i % 7 == 0){
            echo $i . "";
        }
    }
   

//ZAD16
    for($i = 0; $i <=100; $i++){
        if ($i % 3 != 0){
            echo $i ."";
        }
    }
//Zad17
    $i = 13;
    $licznik = 0;
    
    while($licznik < 20){
        if ($i % 3 == 0){
            echo $i;
            $licznik++;
        }
        $i++;
    }
//zad18
 
    $array = [1,4,3,6,8,9,2];
    $max = $array[0];

    foreach($array as $value){
        if($value > $max){
            $max = $value;
        }
    }
    echo "Najwieksza liczba w tablicy  to" . $max;


    //zad19
    echo "<br>";
    for($i = 0; $i<8; $i++){
        for($j = 0; $j <8; $j++){
            if(($i + $j) % 2 == 0){
                echo "X";
            }
            else {
                echo "O";
            }
        }
        echo "<br>";
    }
    //zad20

    for($i = 1; $i <=10; $i++){
        for ($j = 1; $j <= 10; $j++){
            echo $i * $j . "\t";
        }
        echo "<br>";
    }




?>
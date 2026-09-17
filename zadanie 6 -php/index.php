<?php 

$array = [1,2,3,4,5];
$index_to_remove = 2;

unset($array[$index_to_remove]);
var_dump($array);


//Za pomocą pętli for wypelnij cala tablice "0"

for ($i = 0; $i < count($array); $i++) {
     $array[$i] = 0;
}
echo "<br>";
var_dump($array);

    echo "<h1> Tablice dwuwymiarowe</h1>";
    $array2D = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    echo "<br>";
    echo $array2D[0][0];
    echo "</br>";

    for($i = 0; $i < count($array2D); $i++){
        for($j = 0; $j < count ($array2D[$i]); $j++){
            echo $array2D [$i][$j];
            echo "";
        }
        echo "<br>";
    }
    echo "<br>";

    $osoby = [
        ["imie " => "Jan","wiek" => 20],
        ["imie " => "Annna","wiek" => 20],
        ["imie " => "Piotr","wiek" => 20]
    ];

    foreach($osoby as $wiersz){
        foreach($wiersz as $element){
            echo $element . " ";
        }
        echo "<br>";
    }

    for($i = 0; $i <count($osoby); $i++){
        foreach($osoby[$i] as $element){
            echo $element . " ";
        }
        echo "<br>";
    }
    //Zadanie:
    $array4x4 = [
        [1,2,3,4],
        [5,6,7,8],
        [9,10,11,12],
        [13,14,15,16],
    ];
    //Diagonalna = przekątna
    //Za pomoca dwóch pętli for dodac na diagonalych wartość 0.
    
for ($i = 0; $i < count($array4x4); $i++) {
    for($j = 0; $j < count($array4x4[$i]); $j++){
        if($i==$j){
            $array4x4[$i][$j] = 0;
        }
        
    }
   
}
printArray($array4x4);
$sum = 0;
for ($i = 0; $i < count($array4x4); $i++) {
    for($j = 0; $j < count($array4x4[$i]); $j++){
        $sum = $sum + $array4x4[$i][$j];
      
    }
 
}


echo $sum;


    function printArray($array2D){
 for($i = 0; $i < count($array2D); $i++){
        for($j = 0; $j < count ($array2D[$i]); $j++){
            echo $array2D [$i][$j];
            echo " ";
        }
        echo "<br>";
    }}



?>
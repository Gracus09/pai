<?php
    //zad1
    $number = 12;
    if(number % 2 == 0){
        echo"Liczba jest parzysta";
    }else{
        echo "Liczba jest nie parzysta";
    }
    //zad2
    $liczba1 = 20;
    $liczba2 = 5;
    if($liczba2 != 0 &&  $liczba1 % $liczba2){
        echo "Pierwsza liczba jest podzielna przez drugą";
    } else{
        echo "Pierwsza liczba nie jest podzielna przez drugą";
    }
    //zad3
    $liczba = 18;
    if (($liczba >= 1 & $liczba <=18)){
        echo "liczba jest w przedziale od 1 do 20";
    } else if($liczba >= 10 & $liczba <= 21){
        echo "liczba jest w przedziale od 10 do 21";
    } else{
        echo "liczba nie jest w przedziale ";
    }
    //zad4
    $liczba4 = -5;
    if ($liczba5 > 0) {
        echo "liczba jest większa od zera";
    } else if  ($liczba5 < 0 ){
        echo "Liczba jest mniejsza od zera";
    }
    else{
        echo "liczba jest równa zero";
    }
    //zad5
    $wiek = 12;
    if($wiek >12){
        echo "Dziecko";
    }
    else if($wiek >12 && $wiek<17){
        echo "nastolatek";
    }
    else{
        echo "Dorosly";
    }

    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    //zad1


    <form method="get">
    <label> Podaj imie:</label>
    <input type = "text" name = "imie" required>
    <button type = "submit" >Wyślij </button>
</form>




    //zad2
       <form method = "post">
        <label>Podaj wiek: </label>
        <input type = "number" name = "wiek" required>
        <button type = "submit" > Wyślij</button>
    
    
        <br><br>
    
    
    
    //zad3


    <br><br>
    <form method = "Post">
    Nazwa produktu:
    <input type="text" name="nazwa" required>
    <br><br>
    Cena jednego produktu:
    <input type = "number" name = "cena" step="0.01" min="0.01" required>
    <br><br>
    Liczba sztuk
    <input type = "number" name = "ilosc"  min="1" required>
    <br><br>
    <button type = "submit" >Oblicz</button>
    <br><br>
    
    
    
    //zad4
    
    
    
    <br><br>
    <h1>Sklep Internetowy </h1>
    <h2>Dodaj Produkt </h2>
    <form method="Post" >
    <input type="hidden" name = "akcja" value = "dodaj">
    <label>Nazwa produktu:</label>
    <br>
    <input type = "text" name = "nazwa" required>
    <br><br>
    <label>Cena jednego produktu (zł) : </label> <br>
    <input type = "number" name = "cena " min="0.01" step= "0.01" required>
    <br><br>
    <label>Liczba Sztuk: </label> <br>
    <input type = "number" name = "ilosc " min="1" step= "1" required>
    <br><br>
    <button type = "submit">Dodaj do koszyka</button>
</form>
 


   <?php 
   //zad1
if(isset($_GET['imie'])){
    echo "Twoje imie to: " . htmlspecialchars($_GET["imie"]);
}
//zad2
if(isset($_POST['wiek'])){
    echo " ,Twój wiek to: " . htmlspecialchars($_POST['wiek']);
}
// //zad3

// if(isset($_POST['nazwa'])) && isset($_POST['Cena']) && isset($_POST['liczba'])


    //zad4
    session_start();
    if (!isset($_SESSION['koszyk'])){
        $_SESSION['koszyk'] = [];
    }
    if($_SERVER['request_method'] === 'POST'){
        $akcja = $_POST['akcja'] ?? '' ;
    }
    if ($akcja === 'dodaj'){
        $nazwa = tri,($_POST['nazwa'] ?? '')
        $cena = $_POST['cena'] ?? '';
        $ilosc = $_POST ['ilosc'] ?? '';
    }
?>  
</body>
</html>


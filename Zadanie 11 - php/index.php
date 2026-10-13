<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="./" method="get"> 
         <label for="name">Podaj Imie: </label>
        <input type="text" id="name" name="name"><br>

        <label for="age">Wiek: </label>
        <input type="number" id="age" name="age"><br>
        <label for="bilet">Wybierz rodzaj biletu: </label>
<select name="ticket" id="ticket">
            <option value="ulgowy">Ulgowy</option>
            <option value="normalny">Normalny</option>
</select></br>
<input type="submit" value="Oblicz cene">
        
    </form>
</body>
</html>
<?php

$ticket = $_GET['ticket'] ?? '';
$age = $_GET['age'] ?? 0;

$ticketPrice = 0;

if ($ticket == "normalny" && $age > 7) {
    $ticketPrice = 30;
} elseif ($ticket == "ulgowy" && $age > 7) {
    $ticketPrice = 15;
} elseif ($age <= 7) {
    $ticketPrice = 0;
}

echo $ticketPrice;

?>

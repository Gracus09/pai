<?php
$aktualna = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Baza Gier</title>
<style>
body{
    font-family: Arial;
    margin:20px;
}

nav a{
    padding:10px;
    text-decoration:none;
    border:1px solid black;
    margin-right:5px;
}

.active{
    background:orange;
    font-weight:bold;
}

table{
    border-collapse: collapse;
    width:100%;
}

table, th, td{
    border:1px solid black;
    padding:8px;
}
</style>
</head>
<body>

<nav>
    <a href="index.php" class="<?= ($aktualna=="index.php") ? 'active' : '' ?>">Start</a>

    <a href="utworz.php" class="<?= ($aktualna=="utworz.php") ? 'active' : '' ?>">Utwórz bazę</a>

    <a href="dodaj.php" class="<?= ($aktualna=="dodaj.php") ? 'active' : '' ?>">Dodaj</a>

    <a href="lista.php" class="<?= ($aktualna=="lista.php") ? 'active' : '' ?>">Lista</a>

    <a href="usun.php" class="<?= ($aktualna=="usun.php") ? 'active' : '' ?>">Usuń</a>

    <a href="edytuj.php" class="<?= ($aktualna=="edytuj.php") ? 'active' : '' ?>">Edytuj</a>
</nav>

<hr>
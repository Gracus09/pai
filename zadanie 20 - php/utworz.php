<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Utwórz bazę</title>
</head>
<body>

<?php require "nav.php"; ?>

<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    ""
);

if(!$conn)
{
    die(mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS gry_db";

if(mysqli_query($conn,$sql))
{
    echo "Baza utworzona lub już istnieje.<br>";
}

mysqli_select_db($conn,"gry_db");

$sql = "CREATE TABLE IF NOT EXISTS gry(
id INT AUTO_INCREMENT PRIMARY KEY,
tytul VARCHAR(100),
gatunek VARCHAR(50),
platforma VARCHAR(50),
rok_wydania YEAR,
ocena DECIMAL(3,1)
)";

if(mysqli_query($conn,$sql))
{
    echo "Tabela utworzona lub już istnieje.";
}

mysqli_close($conn);

?>

<?php require "footer.php"; ?>
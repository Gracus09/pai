<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "magazyn"
);

if (!$conn) {
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}

?>
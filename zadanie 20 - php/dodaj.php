<?php
require "db_connect.php";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Dodaj grę</title>
</head>
<body>

<?php require "nav.php"; ?>

<h2>Dodaj grę</h2>

<form method="POST" action="<?= basename($_SERVER['PHP_SELF']) ?>">

Tytuł:<br>
<input type="text" name="tytul" required><br><br>

Gatunek:<br>
<input type="text" name="gatunek" required><br><br>

Platforma:<br>
<input type="text" name="platforma" required><br><br>

Rok wydania:<br>
<input type="number" name="rok_wydania" required><br><br>

Ocena:<br>
<input type="number" step="0.1" min="0" max="10" name="ocena" required><br><br>

<input type="submit" value="Dodaj">

</form>

<?php

if(isset($_POST["tytul"]))
{
    $tytul=$_POST["tytul"];
    $gatunek=$_POST["gatunek"];
    $platforma=$_POST["platforma"];
    $rok=$_POST["rok_wydania"];
    $ocena=$_POST["ocena"];

    $sql="INSERT INTO gry
    (tytul,gatunek,platforma,rok_wydania,ocena)
    VALUES
    ('$tytul','$gatunek','$platforma','$rok','$ocena')";

    if(mysqli_query($conn,$sql))
    {
        echo "<p>Dodano grę.</p>";
    }
    else
    {
        echo mysqli_error($conn);
    }
}

mysqli_close($conn);

require "footer.php";
?>
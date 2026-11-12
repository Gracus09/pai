<?php
require "db_connect.php";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Usuń grę</title>
</head>
<body>

<?php require "nav.php"; ?>

<h2>Usuń grę</h2>

<form method="POST" action="<?= basename($_SERVER['PHP_SELF']) ?>">

ID:
<input type="number" name="id" required>

<input type="submit" value="Usuń">

</form>

<?php

if(isset($_POST["id"]))
{
    $id=$_POST["id"];

    $sql="DELETE FROM gry WHERE id=$id";

    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)>0)
    {
        echo "Usunięto rekord.";
    }
    else
    {
        echo "Nie znaleziono rekordu.";
    }
}

mysqli_close($conn);

require "footer.php";
?>
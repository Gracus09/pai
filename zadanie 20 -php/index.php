<?php
require_once "db_connect.php";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Magazyn produktów</title>
</head>
<body>

<h2>Aktualizacja produktu</h2>

<form method="POST">

    <label>ID produktu:</label>
    <input type="number" name="id" required>
    <br><br>

    <label>Nazwa produktu:</label>
    <input type="text" name="name" required>
    <br><br>

    <label>Cena:</label>
    <input type="number" step="0.01" name="price" required>
    <br><br>

    <label>Ilość:</label>
    <input type="number" name="amount" required>
    <br><br>

    <input type="submit" value="Zaktualizuj produkt">

</form>

<hr>

<?php

if (
    isset($_POST["id"]) &&
    isset($_POST["name"]) &&
    isset($_POST["price"]) &&
    isset($_POST["amount"])
) {

    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];

    $sql = "UPDATE produkt
            SET
                name = '$name',
                price = '$price',
                amount = '$amount'
            WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Zaktualizowano rekord o ID: " . $id;
    } else {
        echo "Błąd aktualizacji: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>

</body>
</html>
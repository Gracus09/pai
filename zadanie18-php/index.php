<?php

// ==========================
// DANE POŁĄCZENIA Z BAZĄ
// ==========================
$host = "localhost";
$username = "root";
$password = "";
$database = "magazyn";

// ==========================
// POŁĄCZENIE Z BAZĄ DANYCH
// ==========================
$conn = new mysqli($host, $username, $password, $database);

// Sprawdzenie czy połączenie działa
if ($conn->connect_error) {
    die("Połączenie nie powiodło się: " . $conn->connect_error);
}

// Informacja o poprawnym połączeniu
echo "Połączenie z bazą danych działa!<br><br>";

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Magazyn produktów</title>
</head>
<body>

    <h2>Dodawanie produktu</h2>

    <!-- Formularz wysyłający dane metodą POST -->
    <form method="POST">

        <!-- Nazwa produktu -->
        <label>Nazwa produktu:</label>
        <input type="text" name="name" required>
        <br><br>

        <!-- Cena produktu -->
        <label>Cena:</label>
        <input type="number" name="price" step="0.01" required>
        <br><br>

        <!-- Ilość produktu -->
        <label>Ilość:</label>
        <input type="number" name="amount" required>
        <br><br>

        <!-- Przycisk wysłania formularza -->
        <input type="submit" value="Dodaj produkt">

    </form>

    <hr>

<?php

// =======================================
// SPRAWDZENIE CZY FORMULARZ ZOSTAŁ WYSŁANY
// =======================================
if (
    isset($_POST["name"]) &&
    isset($_POST["price"]) &&
    isset($_POST["amount"])
) {

    // Pobranie danych z formularza
    $name = $_POST["name"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];

    // Wyświetlenie danych wpisanych przez użytkownika
    echo "<h3>Wprowadzone dane:</h3>";
    echo "Nazwa: " . $name . "<br>";
    echo "Cena: " . $price . "<br>";
    echo "Ilość: " . $amount . "<br><br>";

    // =======================================
    // ZAPYTANIE SQL DODAJĄCE NOWY PRODUKT
    // =======================================
    $sql = "INSERT INTO produkt (name, amount, price)
            VALUES ('$name', '$amount', '$price')";

    // =======================================
    // WYKONANIE ZAPYTANIA SQL
    // =======================================
    if (mysqli_query($conn, $sql)) {

        echo "✅ Produkt został dodany!";

    } else {

        echo "❌ Błąd SQL: " . mysqli_error($conn);

    }
}

// =======================================
// ZAMKNIĘCIE POŁĄCZENIA
// =======================================
mysqli_close($conn);

?>

</body>
</html>
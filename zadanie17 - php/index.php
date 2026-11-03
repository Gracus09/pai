<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "magazyn";

// Tworzenie połączenia
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Połączenie nie powiodło się: " . $conn->connect_error);
}

echo "Połączenie się powiodło";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="Post" action="" >
    <label for="name">Nazwa</label>
    <input name = "name" type="text">
    <label for="price">Cena</label>
    <input name = "price" type="number">
    <label for="amount">ilosc</label>
    <input name = "amount" type="number">
    
    <input type = "submit" value="wyslij">
 
</form>

<?php
  
//$conn; //ustanowienie polaczenia , do uzupelnienia 
  
if (isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["amount"])) {

    echo "Nazwa: " . $_POST["name"] . "<br>";
    echo "Cena: " . $_POST["price"] . "<br>";
    echo "Ilosc: " . $_POST["amount"] . "<br>";

    $name = $_POST["name"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];

    // jeśli tabela nazywa się produkt
    $sql = "INSERT INTO produkt (name, amount, price) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);

    // s = string, i = integer, d = double
    $stmt->bind_param("sid", $name, $amount, $price);

    if ($stmt->execute()) {
        echo "Dane zapisane poprawnie";
    } else {
        echo "Błąd: " . $stmt->error;
    }

    $stmt->close();
}
?>
  
</body>
</html>


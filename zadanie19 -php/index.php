<?php 


require_once "db_connect.php";



// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "magazyn";




// $conn = new mysqli($host, $username, $password, $database);

// if ($conn->connect_error) {
//     die("Połączenie nie powiodło się: " . $conn->connect_error);
// }

// echo "Połączenie z bazą danych działa!<br><br>";

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Magazyn produktów</title>
</head>
<body>

    <h2>Lista produktów</h2>
    <table border=1>
    <tr>
    <th>ID</th>
    <th>name</th>
    <th>amount</th>
    <th>price</th>
    </tr>

    <?php 
    $sql = "SELECT * FROM  produkt";
   $result = mysqli_query($conn,$sql);

    

    while($row = $result -> fetch_assoc()){
        // echo $row['id']." ".$row['name']." ".$row['amount']." ".$row['price'];
        echo"<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['amount']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "</tr>"
    }

    mysqli_close($conn);
    
    ?>

</table>

</body>
</html>
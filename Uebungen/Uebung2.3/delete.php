<Style>
    table,
    td,
    th {
        border: 1px solid black;
    }
</Style>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "northwind";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$id = $_GET['test'];

$sql = "DELETE FROM orders WHERE orders.id = :id;
DELETE FROM invoices WHERE invoices.order_id = :id;";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();


?>
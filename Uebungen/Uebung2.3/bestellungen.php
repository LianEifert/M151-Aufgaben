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

$id = $_GET['id'];

$sql = "SELECT * FROM orders 
JOIN customers ON orders.customer_id = customers.id 
WHERE orders.customer_id = {$id}";
?>

<table>
    <tr>
        <th>Order Date </th>
        <th>Shipped Date</th>



    </tr>

    <?php
    foreach ($conn->query($sql) as $row) {
    ?>
        <tr>
            <td>
                <?php echo $row['order_date']; ?>
            </td>
            <td>
                <?php echo $row['shipped_date']; ?>
            </td>
            <td>
                <?php echo "<a href='http://m151.test/Uebungen/Uebung2.3/delete.php?test={$row['id']}'>Löschen</a>"; ?>
            </td>
        </tr>

    <?php
    }
    ?>



</table>
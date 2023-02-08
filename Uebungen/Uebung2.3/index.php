<Style>
    table,
    td,
    th {
        border: 1px solid black;
    }
</Style>


<?php
/* Was bedeutet das mysql: Zeile 8?
Das MySQL für die Datenbank verwendet wird

Was bewirkt die Zeile 10?
Das es die Erros richtig macht
*/
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
?>


<table>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Company</th>
        <th>City</th>
        <th>Job</th>
        <th>Bussines Phone</th>
        <th>Fax</th>
        <th>Address</th>
        <th>Province</th>
        <th>Postal Code </th>
        <th>Region </th>
        <th>Attachments </th>


    </tr>
    <?php


    $sql = "SELECT * FROM customers";
    foreach ($conn->query($sql) as $row) {
    ?>
        <tr>
            <td>
                <?php echo "<a href='http://m151.test/Uebungen/Uebung2.3/bestellungen.php?id={$row['id']}'>" . $row['first_name'] . "</a>"; ?>
            </td>
            <td>
                <?php echo $row['last_name']; ?>
            </td>
            <td>
                <?php echo $row['company']; ?>
            </td>
            <td>
                <?php echo $row['city']; ?>
            </td>
            <td>
                <?php echo $row['job_title']; ?>
            </td>
            <td>
                <?php echo $row['business_phone']; ?>
            </td>
            <td>
                <?php echo $row['fax_number']; ?>
            </td>
            <td>
                <?php echo $row['address']; ?>
            </td>
            <td>
                <?php echo $row['state_province']; ?>
            </td>
            <td>
                <?php echo $row['zip_postal_code']; ?>
            </td>
            <td>
                <?php echo $row['country_region']; ?>
            </td>
            <td>
                <?php echo $row['attachments']; ?>
            </td>


        </tr>

    <?php }
    ?>



</table>
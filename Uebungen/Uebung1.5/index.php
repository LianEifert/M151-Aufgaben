
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        $Klasse = $_POST['Klasse'];
        echo "Hallo {$username}!";
        echo "Klasse: {$Klasse}";
    }
?>

<form method="POST" action="http://m151.test/Uebungen/Uebung1.5/">
    <input type="text" name="name" placeholder="Benutzername" />
    <select name="Klasse" id="Klasse">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
    <input type="submit" value="Absenden"/>
</form>

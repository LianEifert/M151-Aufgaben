<?php
    $username = $_GET['username'];
    
    echo "Hallo {$username}!<br />";

    if ($_GET['age']) {
        $age = $_GET['age'];
        echo "Du bist {$age} Jahre alt.";
    }
?>

/*
http://m151.test/Uebungen/Uebung1.4/index.php?age=17&username=Lian
*/
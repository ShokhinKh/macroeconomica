<?php
require 'dbconnect.php';
git commit -m "Initial commit including .env, dbconnect.php and index.php files"
$query = 'SELECT * FROM country';
$stmt = $pdo->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll();

foreach ($results as $result) {
    echo $result['name']. "<br>";
}
?>
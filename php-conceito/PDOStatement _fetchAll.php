<?php
require '../crud/config.php';

$sth = $connection->prepare("SELECT * from users");

$sth->execute();

echo "Fetch all of the remaining rows in the result set:\n";

$result = $sth->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';
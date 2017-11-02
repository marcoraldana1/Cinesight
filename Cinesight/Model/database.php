<?php
$dsn = 'mysql:host=localhost;dbname=cinesight';
$dbusername='root';
$dbpassword='';

try {//creating a PDO object
    $db = new PDO($dsn, $dbusername, $dbpassword);
} catch (PDOException $ex) {
    $errorMessage = $ex->getMessage();
    include('databaseError.php');
    exit();
}
?>


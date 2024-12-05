<?php
define('SERVERNAME','127.0.0.1:3306');
define('USERNAME','root');
define('PASSWORD','mariadb');
define('DBNAME','UniticketsDB');

try {
    $connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

if (!$connect) {
    die("Connection failed");
}
else{
    echo "Connected Succesfully";
}
echo "<br>";
} catch (Exception $e) {
    die($e ->getMessage());
}
?>
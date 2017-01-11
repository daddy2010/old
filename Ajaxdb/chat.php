<?php
require 'DataBase.php';
//$name = $_REQUEST["n"];
//$text = $_REQUEST["t"];
$name = $_POST['name'];
$text = $_POST['text'];
$data = new DataBase();
$sql = $data->connect();
$sql->exec("INSERT INTO user(name,text)VALUES('$name','$text')");
$res = $sql->query("SELECT * FROM user");
while ($row = $res->fetch()){
    echo $row['name'];
    echo "<br>";
    echo $row['text'];
    echo "<br>";
}
?>

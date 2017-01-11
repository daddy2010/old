<?php
class DataBase {
function connect(){
try {
    $login = "root";
   $db = new PDO('mysql:host=localhost;dbname=ajax',$login); 
   return $db;
} catch (Exception $exc) {
    echo $exc->getMessage();
}
}
}

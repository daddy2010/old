<?php
//$login = "root";
//try {
//  $db = new PDO('mysql:host=localhost;dbname=privat',$login);  
//} catch (Exception $ex) {
//    $ex->getMessagege();
//}
class Base{
    private $id;
function setId($id){
$this->id = $id;
}
function getId(){
    return $this->id;
}
}


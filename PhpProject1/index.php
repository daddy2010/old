<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
class A{
    function name($lastname){
        return $lastname;
    }
}
class B extends A{
    function firstName($name){
        return $name;
    }
}
$reFirstName = new B();

echo $reFirstName->name("Vasulenko");
echo $reFirstName->firstName("Sergushenko");

        ?>
    </body>
</html>

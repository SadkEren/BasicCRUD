<?php 

    try
    {
        $db= new PDO("mysql:host=localhost;dbname=bionlukk;charset=utf8",'root','');
        //echo "Bağlandı";

    }catch(PDOExpception $e)
    {
        echo $e->getMessage();
    }





?>
<?php

try {

    $db= new PDO("mysql:host=localhost;dbname=valo",'root','123');
    


} catch ( PDOExpception $e ){

    print $e->getMessage();

}

?>
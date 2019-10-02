<?php 
require 'base.php';

//create a conncetion
try{
    $pdo = new PDO ("mysql:host=".DB_HOST .";dbname=" . DB_NAME,DB_USERNAME, DB_PASS);
    //Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());

}
?>
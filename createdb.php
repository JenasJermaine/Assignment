<?php
$conn= new PDO ("mysql:host=localhost;","Jermaine", "11200001157");
$conn-> setAttribute(PDO:: ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
echo("connected successfully");
try{
   $sql="CREATE DATABASE IF NOT EXISTS Assignment
";
$conn -> exec ($sql); 
}catch(PDOException $error){
    echo("An error occurred" .$error->getMessage());
}
echo("inserted into db succesfully")


?>
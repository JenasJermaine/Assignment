<?php
$conn= new PDO ("mysql:host=localhost;dbname=Assignment","Jermaine", "11200001157");
$conn-> setAttribute(PDO:: ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
echo("connected successfully");
try{
   $sql="CREATE TABLE Users(
        id INT(11) NOT NULL AUTO_INCREMENT,
        firstName VARCHAR(100) NOT NULL,
        secondName VARCHAR(100) NOT NULL,
        userName VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL ,
        PRIMARY KEY (`id`)) ENGINE = InnoDB";
$conn -> exec ($sql); 
}catch(PDOException $error){
    echo("An error occurred" .$error->getMessage());
}
echo("inserted into db succesfully")


?>
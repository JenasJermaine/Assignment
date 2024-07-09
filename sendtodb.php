<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $secondName = $_POST["secondName"];
    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $host = 'localhost';
    $dbname = 'Assignment';
    $username_db = 'Jermaine';
    $password_db = '11200001157';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username_db, $password_db);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $conn->prepare("INSERT INTO users (firstName, secondName, userName, email, password) VALUES (:firstName, :secondName, :userName, :email, :password)");

        // Bind parameters
        $statement->bindParam(':firstName', $firstName);
        $statement->bindParam(':secondName', $secondName);
        $statement->bindParam(':userName', $userName);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);

        // Execute the statement
        $statement->execute();

        echo "Inserted into database successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null; 
}
?>

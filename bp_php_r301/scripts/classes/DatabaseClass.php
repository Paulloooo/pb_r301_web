<?php
$database = new DatabaseClass();
$database->connecteAndReadDatabase();
class DatabaseClass
{
    function connecteAndReadDatabase(){
        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $database = "bp_r301_web";

        // Creer la connection+
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        //$request = "CREATE TABLE table_PHPTestClass(name varchar(50), surname varchar(50), age int)";
        //$conn->query($request);

        //$requestInsertValues = "INSERT INTO table_PHPTestClass VALUES ('Dujardin','Jean','45')";
        //$conn->query($requestInsertValues);

        $requestSelectValues = "SELECT * FROM table_phptestclass";
        $result = $conn->query($requestSelectValues);

        while($row = mysqli_fetch_array($result)) {
            echo $row["name"];
            echo $row["surname"];
            echo $row["age"];
        }
        $conn->close();

    }
}
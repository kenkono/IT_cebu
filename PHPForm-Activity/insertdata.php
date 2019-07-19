<?php
include 'dbconnect.php';

$name = $_POST["name"];
$email = $_POST["email"];
$jpaddress = $_POST["jpaddress"];
$aboutmyself = $_POST["aboutmyself"];
$gender = $_POST["gender"];

$sql = "INSERT INTO myinfo (name, email, jpaddress, aboutmyself, gender)
VALUES ('$name', '$email', '$jpaddress', '$aboutmyself', '$gender')";

try {
$conn->exec($sql);
    echo "New record created successfully<br>";
    echo "<a href='index.php'>Home</a>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>

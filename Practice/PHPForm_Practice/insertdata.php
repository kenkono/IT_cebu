<?php
include 'dbconnect.php';

$name = "kenkono";
$email = "test@test.com";

$sql = "INSERT INTO myinfo (name, email, jpaddress, aboutmyself, gender)
VALUES ('$name', '$email', 'japanese address', 'about me', 'male')";

try {
$conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>

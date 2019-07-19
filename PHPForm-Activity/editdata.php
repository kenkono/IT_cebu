<?php
include 'dbconnect.php';

$infoID = $_POST["infoID"];
$name = $_POST["name"];
$email = $_POST["email"];
$jpaddress = $_POST["jpaddress"];
$aboutmyself = $_POST["aboutmyself"];
$gender = $_POST["gender"];

$sql = "UPDATE myinfo SET name='$name', email='$email', jpaddress='$jpaddress', aboutmyself='$aboutmyself', gender='$gender' WHERE infoID=$infoID";

try {
$conn->exec($sql);
    echo "Record $infoID is modified successfully<br>";
    echo "<a href='index.php'>Home</a>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>

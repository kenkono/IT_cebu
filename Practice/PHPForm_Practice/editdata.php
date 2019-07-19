<?php
include 'dbconnect.php';

$sql = "UPDATE myinfo SET name='Ryan Enero Dupay', email='test@test.com' WHERE infoID=3";

try {
$conn->exec($sql);
    echo "Record is modified successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>

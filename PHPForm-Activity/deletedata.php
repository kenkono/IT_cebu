<?php
include 'dbconnect.php';

    $infoID = $_GET["infoID"];

    $sql = "DELETE FROM myinfo WHERE infoID=$infoID";


try {
    $conn->exec($sql);
    echo "Record $infoID deleted successfully<br>";
    echo "<a href='index.php'>Home</a>";
    }

catch(PDOException $e)
    {
    		echo $sql . "<br>" . $e->getMessage();
    }

?>

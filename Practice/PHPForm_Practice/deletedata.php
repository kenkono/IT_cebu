<?php
include 'dbconnect.php';

    $sql = "DELETE FROM myinfo WHERE infoID=1";


try {
    $conn->exec($sql);
    echo "Record deleted successfully";
    }

catch(PDOException $e)
    {
    		echo $sql . "<br>" . $e->getMessage();
    }

?>

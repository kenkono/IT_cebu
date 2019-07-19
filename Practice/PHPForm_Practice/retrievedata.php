<?php
include 'dbconnect.php';
    
try {
    $stmt = $conn->prepare('SELECT * FROM myinfo');
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach ($users as $user)
    {
        echo $user["infoID"] . "<br>";
        echo $user["name"] . "<br>";
        echo $user["email"] . "<br>";
        echo $user["jpaddress"] . "<br>";
        echo $user["aboutmyself"] . "<br>";
        echo $user["gender"] . "<br>";
    }
}
catch(PDOException $e) {
    	echo "Error: " . $e->getMessage();
}
?>

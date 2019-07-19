<?php

include_once 'Database.php';

class Board {

    private $database;
    private $connection;
    protected static $table_name = "boards";

    public function __construct() { 
        $this->database = new Database();
        $this->connection = $this->database->connect_db();
    }

    public function saveData($data) {
        $query = "INSERT INTO boards (boardName, description) VALUES (?, ?)";
        $stmt = $this->connection->prepare($query);
        $stmt->execute($data);
        return;
    }

    public static function getAllBoard() {
        $database = new Database(); // new instance connetct to database
        $connection = $database->connect_db(); // connect database table

        $query = "SELECT * FROM " . self::$table_name; // need space after FROM
        $statement = $connection->prepare($query);
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);

        $connection = null;

        return $row;

    }

    public static function getBoardWithID($id) {
        $database = new Database(); // new instance connetct to database
        $connection = $database->connect_db(); // connect database table

        $query = "SELECT * FROM " . self::$table_name . " WHERE id = ?"; // need space after FROM
        $statement = $connection->prepare($query);
        $statement->execute($id);
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $connection = null;

        return $row;
    }

    public static function updateData($data) {
        $database = new Database(); // new instance connetct to database
        $connection = $database->connect_db(); // connect database table

        $query = "UPDATE " . self::$table_name . " SET boardName = ?, description = ? WHERE id = ?";

        $statement = $connection->prepare($query);
        $statement->execute($data);

        $connection = null;

        return;
    }

    public static function deleteData($id) {
        $database = new Database(); // new instance connetct to database
        $connection = $database->connect_db(); // connect database table

        $query = "DELETE FROM " . self::$table_name . " WHERE id = ?";

        $statement = $connection->prepare($query);
        $statement->execute($id);

        $connection = null;

        return;

    }

}

?>
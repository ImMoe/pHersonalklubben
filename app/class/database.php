<?php
class database {
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $dbConnection;
    public $charset = "utf8";

    public function __construct($host, $dbname, $user, $password) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
    }
    public function makeConnection() {
        if ($this->dbConnection) {
            return $this->$dbConnection;
        }
        try {
            $this->dbConnection = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset", $this->user, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function select($from, $where, $is) {
        $statement = $this->dbConnection->query("SELECT * FROM $from WHERE $where = '$is'");
        if ($statement == FALSE) {
            echo "No match found";
        } else {
            return $statement->fetchObject();
        }
    }

    public function update($table, $column, $value, $data) {
        $statement = $this->dbConnection->prepare("UPDATE $table SET $column = :placeholder WHERE email = '$data'");
        $statement->execute([":placeholder" => $value]);
    }

    public function selectAll($table, $direction = "DESC") {
        $statement = $this->dbConnection->query("SELECT * FROM $table ORDER BY id $direction");
        if ($statement !== FALSE) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return "Query execution failed.";
        }
    }

    public function insert($query, $params) {
        $statement = $this->dbConnection->prepare($query);
        $statement->execute($params);
    }
    public function delete($table, $col, $identifier) {
        $statement = $this->dbConnection->prepare("DELETE FROM $table WHERE $col = $identifier");
        $statement->execute();
    }

    public function count($table, $day) {
        $statement = $this->dbConnection->prepare("SELECT COUNT(firstname) AS stats FROM anställda WHERE valid_to > '$day'");
        $statement->execute();
        return $statement->fetchObject();
    }

    public function paginate($table, $start, $amount) {
        $statement = $this->dbConnection->prepare("
            SELECT *
            FROM $table
            LIMIT $start, $amount
        ");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}
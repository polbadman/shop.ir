<?php
defined('ABSPATH') || die;
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "shopir";
    private $connection;

    public function __construct() {
        try {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    public function query($sql, $params = []) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    public function fetchAll($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetch($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($table, $data) {
        $fields = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO {$table} ({$fields}) VALUES ({$placeholders})";
        return $this->query($sql, $data);
    }

    public function update($table, $data, $where) {
        $set = "";
        foreach ($data as $key => $value) {
            $set .= "{$key} = :{$key}, ";
        }
        $set = rtrim($set, ", ");
        $where_clause = "";
        foreach ($where as $key => $value) {
             $where_clause .= "{$key} = :{$key} AND ";
        }
        $where_clause = rtrim($where_clause, "AND ");

        $sql = "UPDATE {$table} SET {$set} WHERE {$where_clause}";
        $params = array_merge($data, $where);
        return $this->query($sql, $params);
    }

     public function delete($table, $where) {
        $where_clause = "";
        foreach ($where as $key => $value) {
             $where_clause .= "{$key} = :{$key} AND ";
        }
        $where_clause = rtrim($where_clause, "AND ");
        $sql = "DELETE FROM {$table} WHERE {$where_clause}";
        return $this->query($sql, $where);
    }
}
?>

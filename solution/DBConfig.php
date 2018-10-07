<?php

class DBConfig {

    private $mysqlHost = 'localhost';
    private $mysqlUserName = 'root';
    private $mysqlPassword = 'root';
    private $mysqlDatabase = 'nejat';
    private $errors = array();
    private $conn = null;
    //EMAIL TEMPLATE ID
    public $sendBeforeDueEmail = 2;
    public $sendAfterDueEmail = 1;
    public $planTimeEmail = 3;
    //Number of days for email sent
    public $sendAfterDueDays = 5;
    public $sendBeforeDueDays = 5;

    function __construct(& $conn = null) {
        // Create connection
        if (empty($conn)) {
            $this->conn = new mysqli($this->mysqlHost, $this->mysqlUserName, $this->mysqlPassword, $this->mysqlDatabase);
            // Check connection
            if ($this->conn->connect_error) {
                $this->errors [] = 'Could not connect: ' . $this->conn->connect_error;
                $this->debug();
            }
//            else{
//                $this->errors [] = 'Success';
//            }
        } else {
            $this->mysql = & $conn;
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function getErrors() {
        return $this->errors;
    }

    private function debug($sql = null, $params = array()) {
        if (!empty($this->errors)) {
            echo "<p>" . implode("<br />", $this->errors) . "</p>";
        }
        if (!empty($sql)) {
            echo interpolateQuery($sql, $params);
        }
    }

    public function executeQuery($sql) {
        $result = $this->conn->query($sql);
        if (!$result) {
            $this->errors [] = "Could not successfully run query ($sql) from DB: " . $this->conn->error();
            $this->debug();
        }

        return $result;
    }

    public function closeConnection() {
        $this->conn->close();
    }

    public function getLastInsertedId() {
        return $this->conn->insert_id;
    }

    public function getResultQuery($sql) {
        $result = $this->conn->query($sql);
        if (!$result) {
            $this->errors [] = "Could not successfully run query ($sql) from DB: " . $this->conn->error();
            $this->debug();
        }

        return $result;
    }

    function butify($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function strtodate($date) {
        $time = strtotime($date);
        return date('Y-m-d', $time);
    }

}

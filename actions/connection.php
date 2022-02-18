<?php
    class Database {
        public $hostName = "localhost";
        public $userName = "root";
        public $password = "";
        public $dbName = "fswd14_cr12_mount_everest_yahia_albghdadi"; 
        public $conn;
        function __construct()
        {
            $this->conn = new mysqli($this->hostName, $this->userName,$this->password, $this->dbName);
        }
        function __destruct()
        {
            $this->conn->close();
        }
    
        function read($table, $columns = "*" ,$join= "", $where = "", $order = ""){
            $sql = "SELECT $columns FROM $table $join $where $order";
            $result = $this->conn->query($sql);
            $fetchedData = $result->fetch_all(MYSQLI_ASSOC);
            return $fetchedData;
        }
    }
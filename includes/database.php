<?php
class Database
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "webphp";
    private $conn;

    public function __construct($host = null, $user = null, $password = null, $dbname = null)
    {
        if ($host !== null) {
            $this->host = $host;
        }
        if ($user !== null) {
            $this->user = $user;
        }
        if ($password !== null) {
            $this->password = $password;
        }
        if ($dbname !== null) {
            $this->dbname = $dbname;
        }

        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}

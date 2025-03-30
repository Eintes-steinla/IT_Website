<?php

namespace Connect;

use mysqli;

class Connection
{
    public static function connect($dbname = "webphp")
    {
        $server = "localhost";
        $user = "root";
        $password = "";

        $conn = new mysqli($server, $user, $password, $dbname);
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }

        $conn->set_charset("utf8mb4");

        return $conn;
    }
}

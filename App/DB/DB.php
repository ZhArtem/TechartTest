<?php

namespace App\DB;

class DB 
{
    public static function connToDB()
    {
        $user = USER;
        $pass = PASS;
        $host = HOST;
        $db   = DB;
        $conn = new \PDO("mysql:dbname=$db;host=$host;charset=utf8mb4", $user, $pass);
        return $conn;
    }
}

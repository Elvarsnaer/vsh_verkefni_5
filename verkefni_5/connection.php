<?php
function dbConnect($usertype, $connectionType = 'mysqli') {
    $host = 'tsuts.tskoli.is';
    $db = '0709992349_vsh_verkefni_5';
    if ($usertype  == 'read') {
        $user = '0709992349';
        $pwd = 'Steina67';
    } elseif ($usertype == 'write') {
        $user = '0709992349';
        $pwd = 'Steina67';
    } else {
        exit('Unrecognized user');
    }
    if ($connectionType == 'mysqli') {
        $conn = new mysqli($host, $user, $pwd, $db);
        if ($conn->connect_error) {
            exit($conn->connect_error);
        }
        return $conn;
    } else {
        try {
            return new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
        } catch (PDOException $e) {
            echo 'Cannot connect to database';
            exit;
        }
    }
}

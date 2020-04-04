<?php
require("../config/main.php");
include "resize.php";
function dbConnect()
{
    static $conn = null;
    if (is_null($conn)) {
        return $conn = mysqli_connect(HOST, USER, PASS, DB);
    }
    return $conn;
}

function execute($sql) {
    return mysqli_query(dbConnect(),$sql);
}

function queryAll($sql) {
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function queryOne($sql) {
    return mysqli_fetch_assoc(execute($sql));
}

function query($conn, $query)
{
    $res = mysqli_query($conn, $query);
    if (gettype($res) == 'boolean') {
        return $res;
    }
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
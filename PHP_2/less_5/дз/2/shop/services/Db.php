<?php

namespace app\services;


class Db
{
        private $config = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'login' => 'root',
        'password' => '',
        'database' => 'gallery',
        'charset' => 'utf8'
    ];

    private $conn = null;


    private function getConnection()
    {
        if (is_null($this->conn)) {
            $this->conn = new \PDO(
                $this->prepareDsnString(),
                $this->config['login'],
                $this->config['password']
            );

            $this->conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }
        return $this->conn;
    }

    private function prepareDsnString()
    {
        $driver = $this->config['driver'];
        $host = $this->config['host'];
        $database = $this->config['database'];
        $charset = $this->config['charset'];
        $dsn ="$driver:host=$host;dbname=$database;charset=$charset";
        return $dsn;

    }
    public function queryOne($sql, $params = []){
        return $this->queryAll($sql, $params)[0];
    }
    public function queryAll($sql, $params = []){
        return $this->query($sql, $params)->fetchAll();
    }


    private function query($sql, $params){
        $pdoStatement = $this->getConnection()->prepare($sql);
        $pdoStatement->execute($params);
        return $pdoStatement;
    }

    public function execute($sql, $params = [])
    {
        $this->query($sql, $params);
        return true;
    }
}


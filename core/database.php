<?php

class Database{

    protected $server;

    protected $username;

    protected $password;

    protected $dbname;

    protected $conn;

    public function __construct(){
        $aConfig = $GLOBALS['config'];
        $this->server = $aConfig['server'];
        $this->username = $aConfig['username'];
        $this->password = $aConfig['password'];
        $this->dbname = $aConfig['dbname'];
    }

    public function connect(){
        $this->conn = new mysqli($this->server,$this->username,$this->password,$this->dbname);
        if($this->conn->connect_error){
           return false;
        }
        return $this->conn;
    }

    public function close(){
        if($this->conn){
            $this->conn->close();
        }
    }

    public function get($sql){
        return $this->conn->query($sql);
    }

}
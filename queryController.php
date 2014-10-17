<?php

class DatabaseConnect{

    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = 'root';
    protected $db = 'test';
    protected $con;

    public function __construct(){

        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->db) or die('Cannot Connect to DB');

    }

    public function getConnection(){
        
        return $this->con;

    }
}

class ExecuteQuery{

    public $connection;
    public $result;

    public function __construct(){

        $db = new DatabaseConnect();
        $this->connection = $db->getConnection();

    }

    public function getQueryAction($sql){

        $this->result = mysqli_query($this->connection, $sql);

    }

    public function setStringAction($string){

        $file = file_get_contents('sqlStrings.json');
        $json = json_decode($file, true);

        foreach($json['Queries'] as $this->result){

            return $this->result[$string];

        }
    }
}

$execute = new ExecuteQuery();
<?php
class Database{

    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = ''){//construct runs the contained code in each instance of the class, first thing to happen.

        $dsn = 'mysql:' . http_build_query($config, '', ';');//turns the config array into a query. Replacing & with ;

        $this->connection = new PDO($dsn, $username, $password, [

            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

        ]);//New DB connection created, Fetch mode set for all instances of the class
    }

    public function query($query, $params = []){
        //prepare, excecute, fetch are methods from the core PDO class
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);
        //declaring this-> lets other methods in the class access $statement
        return $this;
    }

    public function find(){
        return $this->statement->fetch();
    }
       
    public function get(){
        return $this->statement->fetchAll();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }

}



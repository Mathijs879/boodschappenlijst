<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }   

    public function selectAll($table, $intoClass) {
        
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchall(PDO::FETCH_CLASS, $intoClass);  
       
    }

}

?>
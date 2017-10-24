<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
       return $this->pdo = $pdo;
    }


//    function selectAll($table)
//    {
//        $statement = $this->pdo->prepare("select * from {$table}");
//
//        $statement->execute();
//
//        return $statement->fetchAll(PDO::FETCH_CLASS );
//
//    }
//
////    select top users
//    function getTopUsers($table, $column, $limit)
//    {
//
//        $statement = $this->pdo->prepare("select * from {$table} ORDER BY {$column} DESC LIMIT {$limit};");
//
//        $statement->execute();
//
//        return $statement->fetchAll(PDO::FETCH_CLASS );
//    }
//
//    public function insert($table, $parameters)
//    {
//
//        $sql = sprintf(
//            'insert into %s (%s) values (%s)',
//            $table,
//            implode(',', array_keys($parameters)),
//            ':' . implode(', :' , array_keys($parameters))
//        );
//
//
//        try {
//
//            $statement = $this->pdo->prepare($sql);
//
//            $statement->execute($parameters);
//
//        } catch (Exception $e) {
//
//            die('Whoops, something went wrong!');
//        }
//
//    }


}
<?php
/**
 * Created by PhpStorm.
 * User: sithara_s
 * Date: 10/24/2017
 * Time: 11:40 AM
 */

class StoredProcedures
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }



//    select top users
    function BSP_GetTopUsers($table, $column, $limit)
    {

        $statement = $this->pdo->prepare("select * from {$table} ORDER BY {$column} DESC LIMIT {$limit};");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    function BSP_SalonGetTopSalons($limit)
    {

        $statement = $this->pdo->prepare("select * from trn_salon ORDER BY net_rating DESC LIMIT {$limit};");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    function BSP_StylistGetTopStylists($limit)
    {

        $statement = $this->pdo->prepare("select * from trn_salon ORDER BY net_rating DESC LIMIT {$limit};");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    function BSP_UserCheckEmail($email)
    {
        $statement = $this->pdo->prepare("select email from trn_user WHERE email=$email ");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS );

    }


    function BSP_UserCheckPassHash($email, $tempPassword)
    {
        $statement = $this->pdo->prepare("select id from trn_user WHERE email=$email AND temp_password= $tempPassword");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS );

    }


    function BSP_UserCheckUser($email, $password)
    {
        $statement = $this->pdo->prepare("select id, firstname, lastname, user_role from trn_user WHERE email=$email AND password= $password AND active=1");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS );

    }


    function BSP_UserGetDetails($email, $password)
    {
        $statement = $this->pdo->prepare("select id, firstname, lastname, user_role from trn_user WHERE email=$email AND password= $password AND active=1");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS );

    }


    public function CSP_UserActivate($email)
    {

        $sql = "UPDATE trn_user SET active = 1 WHERE email = $email";


        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute();
            echo $statement->rowCount(). "Updated successfully";

        } catch (Exception $e) {

            die('Whoops, something went wrong!');
        }

    }


    public function CSP_UserInsert($table, $parameters)
    {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :' , array_keys($parameters))
        );


        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (Exception $e) {

            die('Whoops, something went wrong!');
        }

    }


    //    function BSP_StylistFindHairStylist($date, $location,$skill, $businessName, $gender, $type, $priceFrom, $priceTo)
//    {
//        $statement = $this->pdo->prepare("select id, firstname, lastname, user_role from trn_user WHERE email=$email AND password= $password AND active=1");
//
//        $statement->execute();
//
//        return $statement->fetchAll(PDO::FETCH_CLASS );
//
//    }


}
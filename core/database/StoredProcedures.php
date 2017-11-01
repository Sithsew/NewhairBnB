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

        $statement = $this->pdo->prepare("select * from trn_stylist ORDER BY net_rating DESC LIMIT {$limit};");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    function BSP_UserCheckEmail($email)
    {
        $statement = $this->pdo->prepare("select email from trn_user WHERE email='$email' ");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS );

    }

    function BSP_UserCheckPassHash($email, $tempPassword)
    {
        $statement = $this->pdo->prepare("select id from trn_user WHERE email='$email' AND temp_password= '$tempPassword'");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS );

    }

    function BSP_UserCheckUser($email, $password)
    {

        $statement = $this->pdo->prepare("select id , firstname, lastname, user_role from trn_user WHERE email='$email' AND password= '$password' AND active=1");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

//        $statement = $this->pdo->prepare("select * from trn_user WHERE email=$email AND password= $password AND active=1");
//
//        $statement->execute();
//
//        return $statement->fetchAll(PDO::FETCH_CLASS );

    }

    function BSP_UserCheckUserToActivate($email, $password)
    {

        $statement = $this->pdo->prepare("select id from trn_user WHERE email='$email' AND password= '$password' ");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

//        $statement = $this->pdo->prepare("select * from trn_user WHERE email=$email AND password= $password AND active=1");
//
//        $statement->execute();
//
//        return $statement->fetchAll(PDO::FETCH_CLASS );

    }

    function BSP_UserGetDetails($email, $password)
    {
        $statement = $this->pdo->prepare("select id, firstname, lastname, user_role from trn_user WHERE email='$email' AND password= '$password' AND active=1");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS );

    }

//    function BSP_StylistFindHairStylist($date,$location, $skill, $business_name,$priceFrom, $priceTo,$gender)
//    {
////        $statement = $this->pdo->prepare("select id, firstname, lastname, user_role from trn_user WHERE email=$email AND password= $password AND active=1");
////
////        $statement->execute();
////
////        return $statement->fetchAll(PDO::FETCH_CLASS );
//
//    }

    function BSP_StylistSearchStylist($date,$location, $skill, $business_name,$priceFrom, $priceTo,$type, $gender)
    {

        $sql="SELECT * FROM trn_stylist WHERE 1=1 ";

        if (!empty($date)){
            $sql=$sql. "AND id NOT IN (SELECT stylist_id FROM trn_availability WHERE date = '$date' GROUP BY stylist_id having count(date)=3)" ;
        }

        if (!empty($location)){
            $sql=$sql. "AND city = '$location'" ;
        }

        if (!empty($skill)){
            $sql=$sql. "AND id IN (SELECT stylist_id FROM trn_stylist_skills WHERE skill_type = $skill)" ;
        }

        if (!empty($business_name)){
            $sql=$sql. "AND business_name LIKE CONCAT('%','$business_name', '%') " ;
        }

//
        if (!empty($priceFrom) && !empty($priceTo)){
            $sql=$sql. "AND session_rate BETWEEN $priceFrom AND $priceTo " ;
        } else if (!empty($priceFrom)){
            $sql=$sql. "AND session_rate >= $priceFrom " ;
        } else if (!empty($priceFrom)){
            $sql=$sql. "AND session_rate <= $priceFrom " ;
        }

        if (!empty($type)){
            $sql=$sql. "AND id IN (SELECT stylist_id FROM trn_stylist_type WHERE stylist_type='$type')" ;
        }
        if (!empty($gender)){
            $sql=$sql.  " AND gender = '$gender'" ;
        }

        $statement=$this->pdo->prepare($sql);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS );


    }

    public function CSP_UserActivate($email)
    {

        $sql = "UPDATE trn_user SET active = 1 WHERE  email = '$email'";

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute();
            return $statement->rowCount();

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

            return $id = $this->pdo->lastInsertId();
//            return $id;
        } catch (Exception $e) {

            echo $e;
        }

    }



}
<?php 

include "db.php";



class helper{
    public $conn;
    
    function __construct()
    {
        $db = new db();


        $this->conn = $db->connection();  
    }



    function selectFlight(){
        $stnt = $this -> conn -> prepare("SELECT * FROM `info` order by RAND() limit 5");


        $stnt -> execute();

        $data = $stnt -> fetchAll();


        return $data;

    }




     
    



    function insertFlight(){
        $stnt = $this->conn->prepare("INSERT INTO `info`(`flight_name`, `flight_time`, `flight_price`, `flight_code`, `flight_company_name`) VALUES (:flight_name,:flight_time,:flight_price,:flight_code,:flight_company_name)");

        function generateRandomCode(){
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $emptyString = '';
            for ($r=0; $r < 13; $r++) { 
                
                $emptyString .= substr($characters, rand(0, strlen($characters) - 1), 1);
            }
            return $emptyString;
        }


        $flight_code = generateRandomCode();


        $flight_time = rand(1, 8);


        $flight_price = $flight_time * 50;
        



        $stnt->bindParam(":flight_name", $_POST["flight_name"]);
        $stnt->bindParam(":flight_time", $flight_time);
        $stnt->bindParam(":flight_price", $flight_price);
        $stnt->bindParam(":flight_code", $flight_code);
        $stnt->bindParam(":flight_company_name", $_POST["flight_company_name"]);

        


        if($stnt->execute()){
            echo "insterted in db";
        }else{
            echo "not insterted in db";
        }
    }



    function deleteFlight(){
        $stnt = $this -> conn -> prepare("DELETE FROM `info` WHERE id = :id");



        $stnt -> bindParam(":id", $_POST["id"]);
        $stnt -> execute();
    }




    function updateFlight(){
        $stnt = $this -> conn -> prepare("UPDATE `info` SET `flight_name`=:flight_name,`flight_time`=:flight_time,`flight_price`=:flight_price,`flight_code`=:flight_code,`flight_company_name`=:flight_company_name WHERE `id`= :id");

        $stnt -> bindParam(":id", $_POST["id"]);
        $stnt -> bindParam(":flight_name", $_POST["flight_name"]);
        $stnt -> bindParam(":flight_time", $_POST["flight_time"]);
        $stnt -> bindParam(":flight_price", $_POST["flight_price"]);
        $stnt -> bindParam(":flight_code", $_POST["flight_code"]);
        $stnt -> bindParam(":flight_company_name", $_POST["flight_company_name"]);

        


        if($stnt -> execute()){
            echo "insterted in db";
        }else{
            echo "not insterted in db";
        }
    }



    function check(){
        $id = $_POST["id"];
        $flight_name = $_POST["flight_name"];
        $flight_time = $_POST["flight_time"];
        $flight_price = $_POST["flight_price"];
        $flight_code = $_POST["flight_code"];
        $flight_company_name = $_POST["flight_company_name"];

        $ifTrue = false; 



        if(150 >=strlen($flight_name) && strlen($flight_name) >= 10){
            $ifTrue = true;
        }else{
            $ifTrue =  false;
        }



        if(100 >=strlen($flight_company_name) && strlen($flight_company_name) >= 10){
            $ifTrue = true;
        }else{
            $ifTrue =  false;
        }


        return $ifTrue;
    }
    
}


$helper = new helper();


if(isset($_POST["insert"])){
    if($helper -> check()){

        $helper -> insertFlight();
    }else{

        echo "check your data and resubmit";
    }
}
if(isset($_POST["update"])){
    $helper -> updateFlight();
}
if(isset($_POST["delete"])){
    $helper -> deleteFlight();
}




?>
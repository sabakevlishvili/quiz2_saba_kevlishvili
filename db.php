<?php 

class db{
    public static function connection(){


        $serverName = "localhost";

        $userName = "root";

        $password = "";


        $dbName = "flight";


        try {
            $conn = new PDO("mysql:host=$serverName; dbname=$dbName", $userName, $password); 

            // $pdo = new PDO('mysql:host=127.0.0.1;dbname=breakr_main;charset=utf8', 'root', '');


            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            return $conn;
        } catch (\Throwable $th) {
            //throw $th;

            echo $th->getMessage();
        }
    }
}

?>

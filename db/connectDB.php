<?php

    function connectDB(){

        $servername = "localhost";

        $username = "root";

        $password = "admin";

        $dbname = "meme";



        try {

            $connect = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);

            // set the PDO error mode to exception

            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connect;

            }

        catch(PDOExeption $e){

            $error = $e->getMessage();

            messageErreur($error);

        }

    }

?>

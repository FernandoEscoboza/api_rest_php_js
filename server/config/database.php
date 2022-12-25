<?php

class database{


    public function getconnection(){
        
        $host = 'localhost';
        $database = 'php_api_restfull';
        $user = 'root';
        $password = '';
        $port = '3306';

        
        try{
            
        $conn = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$database, $user, $password);
        return $conn;
        }catch(Exception $e){
            die('Error failed to connect to MySQL: '.$e);
        }
    }
}

?>
<?php
class Conexion{
    /*public function __construct(){ 
        if(!isset($this->db)){ 
            // Connect to the database 
            try{ 
                $conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword); 
                $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                $this->db = $conn; 
            }catch(PDOException $e){ 
                die("Failed to connect with MySQL: " . $e->getMessage()); 
            } 
        } 
    }*/
    static public function conectar(){
        $dbHost     = "localhost"; 
        $dbUsername = "root"; 
        $dbPassword = ""; 
        $dbName     = "codexworld";
        try{ 
            $conn = new PDO("mysql:host=".$dbHost.";dbname=".$dbName, $dbUsername, $dbPassword); 
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn -> exec("set names utf8");
            return $conn; 
        }catch(PDOException $e){ 
            die("Failed to connect with MySQL: " . $e->getMessage()); 
        }
    }
}
<?php
    class database{
        public $host = HOST;
        public $user = USER;
        public $password = PASSWORD;
        public $database = DATABASE;
        public $con;
        public $result;
        public $row;
        public function __construct(){
      
            $dns = "mysql:host=".$this->host.";dbname=".$this->database;
            try{
                $this->con = new PDO($dns,$this->user,$this->password);
            }
            catch(PDOException $e){
                echo "Connection Error: ".$e->getMessage();
            }
            
        }

        public function Query($qry,$params){
           
            if(empty($params)){
                $this->result = $this->con->prepare($qry);
                return $this->result->execute();
            }
            else{
                $this->result = $this->con->prepare($qry);
                 $this->result->execute($params);                
            }           
        }

        public function rowCount(){
            return $this->result = $this->con->rowCount();
        }

        public function fetchData($result){
            return $this->result->fetchall(PDO::FETCH_OBJ);
        }

        public function fetchRecord($result){
            return $this->result->fetch(PDO::FETCH_OBJ);
        }
        
    }
?>
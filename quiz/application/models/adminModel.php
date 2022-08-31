<?php
    class adminModel extends database{
        public function fetchCours(){
            $qry = "select * from `cours` order by `dttm` desc";
            $params = [];
            $result = $this->Query($qry,$params);
            $row = $this->fetchData($result);
            if($row){
                return $row;
            }
            else{
                return false;
            }
        }

        public function fetchCour($id){
            $data = [$id[2]];
            $qry = "SELECT * FROM cours WHERE cour_id=?";  
            $result = $this->Query($qry,$data);
            $row = $this->fetchRecord($result);   
            if($row){
                return $row;
            }
            else{
                return false;
            }

            
        }

        public function insertCours($data){
            $qry = "insert into `cours`(`title`, `contenue`, `image`,`dttm`) values(?,?,?,?)";
            $params = $data;
            if($this->Query($qry,$params)){
                return true;
            }
            else{
                return false;
            }
        }

        public function insertUser($data){
            $qry = "insert into `users`(`firstname`, `lastname`, `role`) values(?,?,?)";
            $params = $data;
            if($this->Query($qry,$params)){
                return true;
            }
            else{
                return false;
            }
        }


        public function deleteCours($data){
            $data = [$data[2]];
            $qry = "delete from cours WHERE cour_id=?";  
            
            if($this->Query($qry,$data)){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateCour($params){
            $qry = "update  `cours` set `title` = ? ,`contenue`=?,`dttm`=? where `cour_id`=?";
            if($this->Query($qry,$params)){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateCour_image($params){
            $qry = "update  `cours` set `title` = ? ,`contenue`=?, `image`=?,`dttm`=? where `cour_id`=?";
            if($this->Query($qry,$params)){
                return true;
            }
            else{
                return false;
            }
        }

        public function login($data){
            $qry = "SELECT * FROM admin WHERE admin_username=? and admin_password = ?";  
            $result = $this->Query($qry,$data);
            $row = $this->fetchRecord($result);   
            if($row){
                return $row;
            }
            else{
                return false;
            }
        }
    }
?>
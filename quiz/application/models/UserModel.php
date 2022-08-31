<?php
    class UserModel extends database{


        public function fetchUsers(){
            $qry = "select * from `users` order by `firstname` desc";
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

        public function fetchUser($id){
            $data = [$id[2]];
            $qry = "SELECT * FROM users WHERE id=?";  
            $result = $this->Query($qry,$data);
            $row = $this->fetchRecord($result);   
            if($row){
                return $row;
            }
            else{
                return false;
            }

            
        }

        public function insertUser($data){
            $qry = "insert into `users`(`title`, `contenue`, `image`,`dttm`) values(?,?,?,?)";
            $params = $data;
            if($this->Query($qry,$params)){
                return true;
            }
            else{
                return false;
            }
        }

        public function deleteUser($data){
            $data = [$data[2]];
            $qry = "delete from users WHERE id=?";  
            
            if($this->Query($qry,$data)){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateUser($params){
            $qry = "update  `users` set `firstname` = ? ,`lastname`=?,`role`=? where `id`=?";
            if($this->Query($qry,$params)){
                return true;
            }
            else{
                return false;
            }
        }

        

         
 
        
        public function searchUser($data){
            
            $qry = "SELECT * FROM users WHERE `firstname` like ? or `lastname` like ?";  
            $result = $this->Query($qry,$data);
            $row = $this->fetchData($result); 
            if($row){
                return $row;
            }
            else{
                return false;
            }
        }


    }
?>
<?php
    class courModel extends database{
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

        public function searchPost($data){
            
            $qry = "SELECT * FROM cours WHERE `title` like ? or `contenue` like ?";  
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
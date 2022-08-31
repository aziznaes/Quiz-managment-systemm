<?php
    class cours extends framework{
        public function index(){
            $result = $this->model("courModel");
            $data = $result->fetchCours();
            if($data){
                $this->view('cours',$data);
            }
            else{
                $this->view('cours',$data =[]);
            }
        }

        public function cour($id){
            $data=[$id[2]];
            $result = $this->model("courModel");
            $row = $result->fetchCour($id);
            if($row){
                $this->view('cour',$row);
            }
        }

        public function search(){
            $keyword = $this->input('keyword');
            $data = ["%$keyword%","%$keyword%"];
            $result = $this->model("courModel");
            $row = $result->searchCour($data);
            $this->view('searchCour',$row);
        }
    }
?>
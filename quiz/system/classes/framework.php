<?php
    class framework{
        public function view($viewName,$data=[]){
            $path = "../application/views/".$viewName.".php";
            if(file_exists($path)){
                require_once  "../application/views/".$viewName.".php";
            } 
            else{
                echo "view ".$viewName." not found";
            }
        }

        public function model($modelName,$data=[]){
            $path = "../application/models/".$modelName.".php";
            if(file_exists($path)){
                require_once "../application/models/".$modelName.".php";
                return new $modelName;
            } 
            else{
                echo "model ".$modelName." not found";
            }
        }

        public function component($componentName){
            $path = "../application/views/components/".$componentName.".php";
            if(file_exists($path)){
                require_once  "../application/views/components/".$componentName.".php";
            } 
            else{
                echo "components ".$componentName." not found";
            }
        }

        public function input($name){
            if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){
                return $this->name = trim($_POST[$name]);
            }
            else if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get"){
                return $this->name = trim($_GET[$name]);
            }
        }

        public function hasfile($filename){
            return $this->filename = $_FILES[$filename];
        }
        public function uploadfile1($filename){

            $target_dir ='../public/assets/images/';
            $target_file = $target_dir . strtotime(CURRENT_DATE_TIME).basename($filename["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"){
                $move = move_uploaded_file($filename["tmp_name"], $target_file);
                if($move){
                    return true;
                }
                else{
                    return "file not upload";
                }
            }
            else{
                return "file must be an image";
            }
        }

        public function uploadfile($filename){

            $target_dir ='../public/assets/images/';
            $target_file = $target_dir . strtotime(CURRENT_DATE_TIME).basename($filename["name"]);
            $move = move_uploaded_file($filename["tmp_name"], $target_file);
            if($move){
                return true;
            }
            else{
                return false;
            }
        }
        

        public function extention($filename) {
            $target_file = strtotime(CURRENT_DATE_TIME).basename($filename["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"){
                return $target_file;
            }
            else{
                return false;
            }
        }
        
        public function set_session($session_name, $session_value){
            $_SESSION[$session_name] = $session_value;
            return $_SESSION[$session_name];
        }

        public function get_session($session_name){
            return $_SESSION[$session_name];
        }

        public function flash($msg_type,$msg){
             $message =  '<div class="alert alert-'.$msg_type.' alert-dismissible fade show" role="alert">
            '.$msg.'.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
          $this->set_session('flash', $message);
        }

        public function error($msg){
            return  $message= '<span class="error">'.$msg.'.</span>';
        }

        public function redirect($url){
            header ("location: ".BASEURL.$url);
        }

        public function unset_session($session_name){
            unset($session_name);
        }

        public function middelware($session_name){
            $session_name = $this->get_session($session_name);
            if(!empty($session_name) && isset($session_name) ){
                return true;
            };
        }
    }
?>
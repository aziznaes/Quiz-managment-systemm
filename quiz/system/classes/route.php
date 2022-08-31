<?php
    class route{
        
        /* 
            default controller , default method and parameters
        */
        public $controller = "cours";
        public $method     = "index";
        public $params     = []; 

        public function __construct(){
           
            $url = $this->url();
            
            if(!empty($url)) {
                $path = "../application/controllers/".$url[0].".php";
                if(file_exists($path)){
                    $this->controller = $url[0];
                    unset($url[0]);
                } 
                else{
                    echo "<div style='color:#fff; background:#656161;font-size:18px;padding:20px;'>controller ".$url[0]." not found</div>";
                   die(); 
                }
            }

            require_once  "../application/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;

            if(isset($url[1]) && $url[1] !=''){
                if(method_exists($this->controller, $url[1])){
                    $this->method = $url[1];
                    unset($url[1]);
                } 
                else{
                    echo "<div style='color:#fff; background:#656161;font-size:18px;padding:20px;'>method ".$url[1]." not found</div>";
                    die(); 
                }
            }

            if(isset($url)){
                $this->params = $url;
            }
            else{
                $this->params = [];
            }
            call_user_func([$this->controller,$this->method],$this->params);
        }

        public function url(){
            if(isset($_GET['url']) && $_GET['url'] !=''){
                $url = rtrim($_GET['url']);
                $url = filter_var($url,FILTER_SANITIZE_URL);
                $url = explode('/',$url);
                return $url;
            }
        }
        
    }
?>
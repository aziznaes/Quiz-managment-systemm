<?php
    function pre($data){
        echo "<pre>";
            print_r($data);
        echo "</pre>";
    }

    function component($componentName,$data=[]){
        $path = "../application/views/components/".$componentName.".php";
        if(file_exists($path)){
            require_once  "../application/views/components/".$componentName.".php";
        } 
        else{
            echo "components ".$componentName." not found";
        }
    }

?>
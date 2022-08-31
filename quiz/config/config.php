<?php
    session_start();
    define("HOST","localhost");
    define("USER","root");
    define("PASSWORD","");
    define("DATABASE","quiz");
    define("BASEURL",'http://localhost/quiz/');
    
    date_default_timezone_set("Africa/Tunis");
    $cur_date_time = date('Y-m-d H:i:s');
    define('CURRENT_DATE_TIME',$cur_date_time);
?>
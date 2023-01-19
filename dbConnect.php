<?php
    //Define the db credentials
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'may_22';

    $db_connect = new mysqli($db_host, $db_user, $db_password, $db_name);
    if($db_connect->connect_error){
        echo "Failed";
    }
?>
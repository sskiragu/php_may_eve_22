<?php
if(isset($_GET['id'])){
    $deleteId  = $_GET['id'];

    include_once 'dbConnect.php';

    $sql = "DELETE FROM details WHERE id=$deleteId";

    if($db_connect->query($sql) === TRUE){
        header('Location: dashboard.php');
    }else{
        echo "Error". $db_connect->error;
    }

}

?>
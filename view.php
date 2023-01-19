<?php

include 'dbConnect.php';

$sql = "SELECT * FROM details";

$result = $db_connect->query($sql);

while($row = $result->fetch_assoc()){
    echo $row['email'] ." ". $row['username'] ."<br />";
}

?>
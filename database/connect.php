<?php

$con=new mysqli('localhost', 'root', 'mp_db');

if($con){
    echo "Connection successful";
}else{
    die(mysqli_error($con));
}



?>
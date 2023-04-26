<?php

$conn = mysqli_connect("localhost","root","","quiz_score");
if(mysqli_connect_error()){
    echo" <script> alert('cannot connect to the database'); </script>";
    exit();
}

?>
<?php
$con = mysqli_connect('localhost','root','','cms');

if(!$con){
    echo "<script>alert('Connection Error')</script>";
}
?>
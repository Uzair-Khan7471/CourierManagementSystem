<?php
include('header/connection.php');
$x=$_GET['id'];
$quer="DELETE FROM `branch` WHERE branch_id='$x'";
$res=mysqli_query($con,$quer);
if($res){
    echo "<script>alert('deleted');window.location.href='branch_table.php'</script>";
}
else{ 
    echo mysqli_error($con);
}


?>
<?php
include('header/connection.php');
$x=$_GET['id'];
$quer="DELETE FROM `to_do_list` WHERE to_do_list_id='$x'";
$res=mysqli_query($con,$quer);
if($res){
    echo "<script>alert('deleted');window.location.href='index.php'</script>";
}
else{ 
    echo mysqli_error($con);
}


?>
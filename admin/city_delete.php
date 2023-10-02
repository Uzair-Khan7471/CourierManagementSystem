<?php
include('header/connection.php');
$x=$_GET['id'];
$quer="DELETE FROM `my_city` WHERE id='$x'";
$res=mysqli_query($con,$quer);
if($res){
    echo "<script>alert('deleted');window.location.href='city_table.php'</script>";
}
else{ 
    echo mysqli_error($con);
}


?>
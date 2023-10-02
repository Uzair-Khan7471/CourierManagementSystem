<?php
include('header/connection.php');
$x=$_GET['id'];
$quer="DELETE FROM `parcel_type` WHERE type_id='$x'";
$res=mysqli_query($con,$quer);
if($res){
    echo "<script>alert('deleted');window.location.href='type_table.php'</script>";
}
else{ 
    echo mysqli_error($con);
}


?>
<?php
include('header/connection.php');
$x=$_GET['id'];
$quer="DELETE FROM `pakage` WHERE pakage_id='$x'";
$res=mysqli_query($con,$quer);
if($res){
    echo "<script>alert('deleted');window.location.href='pakage_table.php'</script>";
}
else{ 
    echo mysqli_error($con);
}


?>
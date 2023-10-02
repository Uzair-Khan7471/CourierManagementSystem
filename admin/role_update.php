<?php
include('header/connection.php');
if(isset($_POST['btn'])){
$id=$_POST['id'];
$name=$_POST['category_inp'];

$q="update roll set roll_name='$name' where roll_id='$id'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('updated');window.location.href='role_table.php'</script>";
}
else{
    echo mysqli_error($con);
}
}
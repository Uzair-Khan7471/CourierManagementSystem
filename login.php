<?php
session_start();
include("admin/header/connection.php");
if(isset($_POST['btn'])){
$us=$_POST['uu'];
$p=$_POST['pp'];
$q="SELECT* from user where users_name='$us' AND user_passward='$p' AND roll_id_fk='2'";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);
if($count==0){
  echo "<script>alert('Log In failed')</script>";
}
else{
  $_SESSION['USER_ID']=$data['users_id'];
  $_SESSION['USER_NAME']=$us;
  $_SESSION['USER_IMAGE']=$data['user_image'];
  echo "<script>alert('Succesfully Logged in'); window.location.href='index.php'</script>";
}
  


}
?>

<?php
include('header/connection.php');
if(isset($_POST['btn'])){
   
    $id=$_POST['id'];
    $p=$_POST['pass'];


    $qq="UPDATE `user` SET `user_passward`='$p' WHERE users_id='$id'";
$ress=mysqli_query($con,$qq);

          

if($ress){
    echo"<script>alert('updated');window.location.href='index.php'</script>";
}
else{
    echo mysqli_error($con);
}

}

?>


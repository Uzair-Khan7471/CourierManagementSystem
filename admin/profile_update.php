
<?php
include('header/connection.php');
if(isset($_POST['btn'])){
   
    $id=$_POST['upd'];
   $fk=$_POST['roll_name'];
    $a=$_POST['user_name_inp'];
    $b=$_POST['user_email_inp'];
    $e=$_POST['user_contact_inp'];
    $d=$_POST['user_password_inp'];
    $image_name=$_FILES['user_image_inp']['name'];
    $image_tname=$_FILES['user_image_inp']['tmp_name'];
    $image_type=$_FILES['user_image_inp']['type'];
    $image_size=$_FILES['user_image_inp']['size'];


if(is_uploaded_file($_FILES['user_image_inp']['tmp_name'])){
if( $image_type=="image/png" || $image_type=="image/jpg" || $image_type=="image/jpeg"){

if($image_size<=10000000){
    $folder="userpicture/";
    $path=$folder.$image_name;
    move_uploaded_file($image_tname,$path);


    $qq="UPDATE `user` SET `roll_id_fk`='$fk',`users_name`='$a',`user_email`='$b',`user_contact`='$e',`user_image`='$path',`user_passward`='$d' WHERE users_id=' $id'";
$ress=mysqli_query($con,$qq);

          

if($ress){
    echo"<script>alert('updated');window.location.href='index.php'</script>";
}
else{
    echo mysqli_error($con);
}

}

else{
    echo"<script>alert('image size');window.location.href='index.php'</script>";

}

else{
    echo"<script>alert('image format');window.location.href='index.php'</script>";
}


    }

    else {
        $qq="UPDATE `user` SET `roll_id_fk`='$fk',`users_name`='$a',`user_email`='$b',`user_contact`='$e',`user_passward`='$d' WHERE users_id=' $id'";
        $ress=mysqli_query($con,$qq);
              if($ress){
                  echo "<script>alert('updated');window.location.href='index.php'</script>";
              }
              else{
                  echo mysqli_error($con);
              }
    }
}
?>
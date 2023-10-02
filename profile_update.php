
<?php
include('admin/header/connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if(isset($_POST['btn'])){
   
    $id=$_POST['upd'];

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
    $folder='userpicture/users/';
    $path=$folder.$image_name;
    $path1='../admin/'.$folder.$image_name;
    move_uploaded_file($image_tname,$path1);


    $qq="UPDATE `user` SET `roll_id_fk`='2',`users_name`='$a',`user_email`='$b',`user_contact`='$e',`user_image`='$path',`user_passward`='$d' WHERE users_id=' $id'";
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

}

else{
    echo"<script>alert('image format');window.location.href='index.php'</script>";
}


    }

    else {
        $qq="UPDATE `user` SET `roll_id_fk`='2',`users_name`='$a',`user_email`='$b',`user_contact`='$e',`user_passward`='$d' WHERE users_id=' $id'";
        $ress=mysqli_query($con,$qq);
              if($ress){
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = 'true';
                $mail->Username = 'uk7973607@gmail.com';
                $mail->Password = 'kimlvpzcoccftjyk';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = '465';
                
                $mail->setFrom('uk7973607@gmail.com');
                
                $mail->addAddress($_POST['user_email_inp']);
                
                $mail->isHTML('true');
                
                $mail->Subject = 'ZEPTAR ';
                $mail->Body = 'Your New! User Name Is '.$a.' And  Passward is '.$d;
                $mail->send();
                echo "<script>alert('Your User Name And Password Send In Your Email')</script>";
                  echo "<script>alert('updated');window.location.href='index.php'</script>";
              }
              else{
                  echo mysqli_error($con);
              }
    }
}
?>
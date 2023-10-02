





<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
include('admin/header/connection.php');
if(isset($_POST['btn'])){
$user_name=$_POST['na'];
$user_contact=$_POST['co'];
$user_password=$_POST['pa'];
$user_email=$_POST['ea'];
$user_img_name=$_FILES['signupImage']['name'];
$user_img_tname=$_FILES['signupImage']['tmp_name'];
$user_img_size=$_FILES['signupImage']['size'];
$user_img_type=$_FILES['signupImage']['type'];
$folder='userpicture/users/';
$path=$folder.$user_img_name;
$path1='../admin/'.$folder.$user_img_name;
move_uploaded_file($user_img_tname,$path1);
//if ki condition






if($user_img_type=='image/png' || $user_img_type=='image/jpg' || $user_img_type=='image/jpeg')
{
    if($user_img_size<=10000000){
        $q="INSERT INTO `user`( `roll_id_fk`, `users_name`, `user_passward`,`user_email`,`user_contact`, `user_image`) VALUES (2,'$user_name','$user_password','$user_email','$user_contact','$path')";
$res=mysqli_query($con,$q);



if($res){
    $mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = 'true';
$mail->Username = 'uk7973607@gmail.com';
$mail->Password = 'kimlvpzcoccftjyk';
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';

$mail->setFrom('uk7973607@gmail.com');

$mail->addAddress($_POST['ea']);

$mail->isHTML('true');

$mail->Subject = 'ZEPTAR ';
$mail->Body = 'Your User Name Is '.$user_name.' And Your Passward is '.$user_password;
$mail->send();
echo "<script>alert('Your User Name And Password Send In Your Email')</script>";
    echo "<script>alert('Your Account Create Succesfully');window.location.href='index.php'</script>";
}
else{
    echo mysqli_error($con);
}
    }

    else{
        echo "<script>alert('size error')</script>";
    }
}
else{
    echo "<script>alert('format error')</script>";
}
//mail









}
//end if start else

?>

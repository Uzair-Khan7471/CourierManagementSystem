<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
include('admin/header/connection.php');


if(isset($_POST['save_btn'])){
    if((isset($_SESSION['USER_NAME']))){ 
    #$b_branch=$_POST['nearest'];

    //for sender 
$s_name=$_POST['sender_name'];
$s_email=$_POST['sender_email'];
$s_address=$_POST['sender_address'];
$s_phone=$_POST['sender_phone_number'];
$s_date=$_POST['sender_date'];
// for reciever
$r_name=$_POST['reciever_name'];
$r_email=$_POST['reciever_email'];
$r_address=$_POST['reciever_address'];
$r_phone=$_POST['reciever_phone_number'];

$p_city=$_POST['pick_citys'];
$p2_city=explode(" ",$p_city);
$p3_city=$p2_city[0];
$d_city=$_POST['drop_citys'];
$d2_city=explode(" ",$d_city);
$d3_city=$d2_city[0];
#echo $d3_city;
#echo $p3_city;

$q2="SELECT * FROM `booking` order by booking_id desc limit 1";
$res2=mysqli_query($con,$q2);
$data2=mysqli_fetch_assoc($res2);
$b_id=$data2['booking_id'];
$b_idd=$b_id+1;
#echo $b_idd  ;

function RandomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring = $characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }
    $r= RandomString().rand(1000,9999).RandomString().$b_idd;
#echo  $r;



$q="INSERT INTO `booking`( `pickup_branch_id_fk`,`deliver_branch_id_fk`, `sender_name`, `sender_email`, `sender_address`, `sender_contact`, `reciever_name`, `reciever_email`, `reciever_contact`, `reciever_address`,  `date`,status_id_FK,tracking_id) VALUES ('$p3_city','$d3_city','$s_name','$s_email','$s_address','$s_phone','$r_name','$r_email','$r_phone','$r_address','$s_date','1','$r')";
$res=mysqli_query($con,$q);
if($res){
}
else{
    echo "<script>alert('insertion problem1')</script>";
}




$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = 'true';
$mail->Username = 'uk7973607@gmail.com';
$mail->Password = 'kimlvpzcoccftjyk';
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';

$mail->setFrom('uk7973607@gmail.com');

$mail->addAddress($_POST['sender_email']);

$mail->isHTML('true');

$mail->Subject = 'ZEPTAR ';
$mail->Body = $r.' This is your tracking number. You can track your parcel on our website';
$mail->send();
    //detail about product
    $p_weight=$_POST['weight'];
    $p_height=$_POST['height'];
$p_width=$_POST['width'];
$p_length=$_POST['length'];
$p_price=$_POST['price'];
$typess=$_POST['product'];
$last_id = $con->insert_id;
echo "<script>
    
    alert('Tracking Number Send Your Email ')
    </script>";

$qq="INSERT INTO `parcel_information`(`booking_id_fk`, `type_id_fk`, `weight`, `height`, `lenght`, `width`, `price`) VALUES ('$last_id','$typess','$p_weight','$p_height','$p_length','$p_width','$p_price')";
$ress=mysqli_query($con,$qq);
if($ress){
    echo "<script>alert('YOUR ORDER IS PLACED');window.location.href='index.php'</script>";
}
else{
    echo "<script>alert('insertion problem2')</script>";
}
}

else{
    echo "<script>alert('first login then booking available');window.location.href='login_form.php'</script>";
}

}

?>

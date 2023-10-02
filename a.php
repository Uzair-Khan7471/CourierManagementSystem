<?php
$con = mysqli_connect('localhost','root','','cms');
$q2="SELECT * FROM `booking` order by booking_id desc limit 1;";
$res2=mysqli_query($con,$q2);
$data2=mysqli_fetch_assoc($res2);
$b_id=$data2['booking_id'];
$b_idd=$b_id+1;
echo $b_idd;

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
echo $r;
?> 
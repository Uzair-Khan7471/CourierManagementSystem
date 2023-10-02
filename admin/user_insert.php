
<?php
include('header/connection.php');

if(isset($_POST['btn'])){

    $fk=$_POST['roll_name'];
    $a=$_POST['user_name_inp'];
    $b=$_POST['user_email_inp'];
    $e=$_POST['user_contact_inp'];
    $d=$_POST['user_password_inp'];
    $image_name=$_FILES['user_image_inp']['name'];
    $image_tname=$_FILES['user_image_inp']['tmp_name'];
    $image_type=$_FILES['user_image_inp']['type'];
    $image_size=$_FILES['user_image_inp']['size'];
    if($image_type=="image/png" || $image_type=="image/jpg" || $image_type=="jpeg"){
 if($image_size<=1000000){
    $folder="userpicture/";
    $path=$folder.$image_name;
    move_uploaded_file($image_tname,$path);

    $qu="insert into user(roll_id_fk,users_name,user_email,user_contact,user_image,user_passward
	) values('$fk','$a','$b','$e','$path','$d')";
    $res=mysqli_query($con,$qu);

if($res){

    echo "<script>alert('inserted');window.location.href='user_table.php'</script>";
}

else{
    echo mysqli_error($con);
}

    

    }

    else{
        echo "<script>alert('image size');window.location.href='user_table.php'</script>";
    }  
    }
    else{
        echo "<script>alert('image format');window.location.href='user_table.php'</script>";
    }

    }
?>
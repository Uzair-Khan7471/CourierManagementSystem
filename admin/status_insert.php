<?php
include('header/connection.php');
if(isset($_POST['btn'])){
    $id=$_POST['id'];

    $b=$_POST['delivery'];
    $c=$_POST['status_n'];
 
 
    $query = "UPDATE `booking` SET `pickup_branch_id_fk`='$b',`status_id_FK`='$c' WHERE booking_id='$id'";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('update');window.location.href='show_courier.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem')</script>";
    }
}
?>
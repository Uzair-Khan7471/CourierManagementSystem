

<?php
if(isset($_POST['btn'])){
    include('header/connection.php');
    $city = $_POST['branch_name_inp'];
    $fk=$_POST['city_name'];
    $city_id = $_POST['branch_id_inp'];
    $a = $_POST['branch_contact_inp'];
    $b = $_POST['branch_address_inp'];
    $c = $_POST['branch_email_inp'];
    $e= $_POST['city_long_inp'];
    $d= $_POST['city_let_inp'];
   
    

    
    $query="UPDATE `branch` SET `city_id_FK`='$fk',`area`='$city' ,`contact`='$a',`address`='$b',`email`='$c' ,`lattitude`='$d',`longitude`='$e' WHERE branch_id='$city_id'";

    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('updated');window.location.href='branch_table.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem')</script>";
    }
}


?>

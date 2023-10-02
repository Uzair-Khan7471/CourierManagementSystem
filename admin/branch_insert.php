

<?php
if(isset($_POST['btn'])){
    include('header/connection.php');
    $branch = $_POST['branch_name_inp'];
    $city = $_POST['city_name'];
    $a = $_POST['branch_address_inp'];
    $b= $_POST['branch_contact_inp'];
    $c = $_POST['branch_email_inp'];
    $e= $_POST['city_long_inp'];
    $d= $_POST['city_let_inp'];
   
    $query = "insert into branch(area,city_id_FK,contact,address,email,longitude,lattitude) values ('$branch','$city','$b','$a','$c','$d','$e')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('inserted');window.location.href='branch_table.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem');window.location.href='branch_form.php'</script>";
    }
}
?>



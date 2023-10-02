
<?php
if(isset($_POST['btn'])){
    $role = $_POST['add_role'];
 
    include('header/connection.php');
    $query = "insert into roll(roll_name) values ('$role')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('inserted');window.location.href='role_table.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem');window.location.href='role_form.php'</script>";
    }
}
?>
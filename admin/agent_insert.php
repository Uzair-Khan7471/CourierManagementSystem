

<?php
if(isset($_POST['btn'])){
    $user = $_POST['user_drop'];
    $branch = $_POST['branch_drop'];
    $city = $_POST['city_drop'];

    include('header/connection.php');
    $query = "INSERT into agent (user_id_FK,branch_id_FK,city_id_fk) values ('$user','$branch',$city)";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('inserted');window.location.href='agent_table.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem');window.location.href='agent_form.php'</script>";
    }
}
?>
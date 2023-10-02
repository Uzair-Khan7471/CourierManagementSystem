

<?php
if(isset($_POST['btn'])){
    $city = $_POST['city_name_inp'];
    $city_id = $_POST['city_id_inp'];

    include('header/connection.php');

    $query = "UPDATE `my_city` SET `city_name`='$city' WHERE id='$city_id'";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('updated');window.location.href='city_table.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem');window.location.href='city_table.php'</script>";
    }
}
?>
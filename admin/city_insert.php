

<?php
if(isset($_POST['btn'])){
    $city = $_POST['city_name_inp'];

    include('header/connection.php');
    $query = "insert into my_city(city_name) values ('$city')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('inserted');window.location.href='city_table.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem');window.location.href='city_form.php'</script>";
    }
}
?>

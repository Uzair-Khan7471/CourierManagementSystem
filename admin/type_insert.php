
<?php
if(isset($_POST['btn'])){
    $a = $_POST['type_name'];

    include('header/connection.php');
    $query = "insert into parcel_type(type_name) values ('$a')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('inserted');window.location.href='type_table.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem');window.location.href='type_form.php'</script>";
    }
}
?>
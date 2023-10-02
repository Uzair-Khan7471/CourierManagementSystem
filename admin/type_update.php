
<?php
if(isset($_POST['btn'])){
    $a = $_POST['one'];
    $b = $_POST['type_name'];

    include('header/connection.php');
    $query = "UPDATE `parcel_type` SET `type_name`=' $b' WHERE type_id='$a'";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('updated');window.location.href='type_table.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem')</script>";
    }
}
?>
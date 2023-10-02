
<?php
if(isset($_POST['btn'])){
    $a = $_POST['km_inp'];
    $b = $_POST['kg_inp'];
    $c = $_POST['days_inp'];
    include('header/connection.php');
    $query = "insert into package(per_km,per_kg,days) values ('$a','$b','$c')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('inserted');window.location.href='pakage_table.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem');window.location.href='pakage_form.php'</script>";
    }
}
?>
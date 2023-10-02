
<?php
if(isset($_POST['btn'])){
    $a = $_POST['one'];
    $b = $_POST['two'];
    $c = $_POST['three'];
    $d = $_POST['four'];
    include('header/connection.php');
    $query = "UPDATE `package` SET `per_km`=' $b',`per_kg`='   $c',`days`=' $d' WHERE package_id='$a'";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('updayed');window.location.href='pakage_table.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem');window.location.href='pakage_form.php'</script>";
    }
}
?>
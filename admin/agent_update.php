

<?php
if(isset($_POST['btn'])){
    $branch = $_POST['branch_name'];
    $userss=$_POST['users_name'];
    $agent_id = $_POST['agent_id_inp'];
    $citys=$_POST['city_name'];
    include('header/connection.php');

    $query=" UPDATE `agent` SET `user_id_FK`=' $userss',`city_id_fk`=' $citys',`branch_id_FK`='$branch' WHERE agent_id='$agent_id'";

    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('updated');window.location.href='agent_table.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem');window.location.href='agent_form.php</script>";
    }
}

?>

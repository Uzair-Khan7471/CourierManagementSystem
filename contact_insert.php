
<?php
if(isset($_POST['btn'])){
    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['subject'];
    $d = $_POST['message'];
    include('admin/header/connection.php');
    $query = "insert into contact_table(contact_name,contact_email,contact_subject,contact_message) values ('$a','$b','$c','$d')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('your message has been sent succesfully');window.location.href='contact.php'</script>";
    }
    else{
        echo "<script>alert('insertion problem');window.location.href='contact.php'</script>";
    }
}
?>
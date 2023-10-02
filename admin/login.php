<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    .wrapper input::placeholder{
  font-size: 17px;
}
.wrapper span{
  position: absolute;
  right: 15px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
  color: #8e44ad;
  cursor: pointer;
  display: none;
}
.wrapper input:valid ~ span{
  display: block;
}
.wrapper span i.hide-btn::before{
  content: "\f070";
}
</style>
<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

          
  
<!-- dddd -->
<div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <form action="
                        " method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="username"  required="required"  id="floatingText" placeholder="jhondoe">
                            <label for="floatingText">Username</label>
                        </div>
                     
                        <div class="form-floating mb-4 wrapper">
                            <input type="password" id="o" class="form-control" name="pass" required="required"  id="floatingPassword" placeholder="Password">
                            <span class="show-btn" id="p"><i class="fas fa-eye"></i></span>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                          
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4"  name="btn" value="Login">Sign In</button>
                        <!-- <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p> -->
                        </form>
                      </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>
    <script>
      const passField = document.getElementById('o');
      const showBtn = document.querySelector("span i");
      showBtn.onclick = (()=>{
        if(passField.type === "password"){
          passField.type = "text";
          showBtn.classList.add("hide-btn");
        }else{
          passField.type = "password";
          showBtn.classList.remove("hide-btn");
        }
      });
    </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>


</body>

</html>
<?php
include("header/connection.php");
if(isset($_POST['btn'])){
$us=$_POST['username'];
$p=$_POST['pass'];

$q="SELECT * from user where users_name='$us' AND user_passward='$p'";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);
if($count==0){
  echo "<script>alert('Log In failed');</script>";
}
else{
    if($data['roll_id_fk']=='1' )
{
    $_SESSION['A_ADMIN_NAME']=$us;
    $_SESSION['A_ADMIN_IMAGE']=$data['user_image'];
    $_SESSION['A_ADMIN_ID']=$data['users_id'];
    echo "<script>alert('Succesfully Logged in'); window.location.href='index.php'</script>";
}
 else if($data['roll_id_fk']=='3') {
    $_SESSION['AGENT_NAME']=$us;
    $_SESSION['AGENT_IMAGE']=$data['user_image'];
    $_SESSION['AGENT_ID']=$data['users_id'];
    echo "<script>alert('Succesfully Logged in'); window.location.href='index.php'</script>";
 }
}
  


}

?>





<!-- dddd -->
<body>


 
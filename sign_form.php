<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

         

                        

                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content p-5">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Please Sign Up Here</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body"> 
                                <form class="signup-form text-center" method="POST" enctype="multipart/form-data" action="signup.php">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text"  name="na"placeholder="First Name">
                                        </div>
                                        <div class="col-lg-6">
                                 
                                 <input type="email" name="ea" placeholder="Enter Your Email">
                                     </div>
                                        <div class="col-lg-6">
                                 
                                    <input type="password" name="pa" placeholder="Enter Your Password">
                                        </div>
                                        <div class="col-lg-6">
                                 
                                 <input type="file" name="signupImage" value="image" placeholder="">
                                     </div>
                                    </div>
                           
                              
                                    
                                    <label class="checkbox-inline"><input type="checkbox" value="">I Agree</label> 
                                    <input class="btn btn-primary btn-sm" name="btn"   type="submit" value="Register Now">
                                </form> 
                              </div> 
                            </div>
                          </div>
                        </div>

</body>
</html> -->



<?php
include('header.php')
?>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
.page-header::before{
    content: "";
    background-color: rgba(14, 29, 52, 0.8);
    position: absolute;
    inset: 0;
    height: 300px;
}
.page-header{
    background-image: url('assets/img/cta-bg.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 300px;
}

span {
  color:red;
}

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
  <!-- Section: Design Block -->
  <section class="text-center d-inline">
  <!-- Background image -->
  <div class="p-5 bg-image page-header"></div>
  <!-- Background image -->

  <div class="card shadow-5-strong mb-5 mx-auto w-75" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5 ">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold">Sign Up</h2>
          <form class="signup-form text-center" action="signup.php" method="POST" method="POST" enctype="multipart/form-data" >
            <!-- 2 column grid layout with text inputs for the first and last names -->
            
            <div class="row">
            <div class="d-flex flex-column align-items-center text-center">
                <img id="proimg"  class="rounded-circle mt-5" width="200px" />
                    <span class="font-weight-bold text-white pt-4 fs-5">Upload Profile Picture</span>
                    <span> </span>
                </div>
            <div class="col-xl-6 form-floating mb-4">
              <input type="text"
              name="na" class="form-control"  id="ones"  onblur="names()" required pattern="[A-Za-z]{3,}" title="Minimun Three letter  without Number" placeholder="Enter Your Password"  />
              <label  for="formId1">&nbsp; Enter Your Name</label>
              <span id="p1" style="color:red;"></span>
            </div>

            <div class="col-xl-6 form-floating mb-4">
              <input type="tel"
               id="two" name="co" min="1 "class="form-control" onblur="contact()" required pattern="[A-Za-z0-9]{3,}" title="Please Enter Correct Address " placeholder="Enter Your Password"/>
              <label  for="formId1">&nbsp; Enter Your phone number</label>
              <span id="p2"></span>
            </div>
         
            </div>
            <!-- Email input -->
         
            <div class="form-floating mb-4">
              <input type="email"
               id="three" name="ea" class="form-control" onblur="email()" required pattern="^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$" title="Email Address Is Invalid .Please  Enter Correct Email Address" placeholder="Enter Your Email Address"/>
              <label  for="formId1">Enter Your Email address</label>
            </div>
            <span id="p3"></span>
            <!-- Password input -->
            <div class="form-floating mb-4 wrapper">
              <input type="password"
               id="four" name="pa" onblur="passwordS()" class="form-control" required  placeholder="Enter Your Password"/>
               <span class="show-btn" id="p"><i class="fas fa-eye"></i></span>
              <label  for="formId1">Enter Your Password</label>
            </div>
            <span id="p4"></span>
            <div class="row">
            <div class="form-floating mb-4">
              <input type="file"
               id="formId1" name="signupImage" class="form-control" placeho lder="Upload Your Profile Picture"  onChange="readURL(this)"/>
              <label  for="formId1">Enter Your Profile Picture</label>
            

            <!-- Submit button -->
            <button type="submit" onclick="chkForm()" name="btn"  class="btn btn-primary btn-block mb-4">
              Sign Up
</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script> 
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
                   .css( "visibility", "visible" );		
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script> 

<script>
        var name = false;
        var con = false;
      var mail = false;

     var pass = false;
function names(){
  var first = document.getElementById("ones").value;
        var testing_reg = /^[a-zA-Z\s]{3,}$/;
        if (first == "") {
          document.getElementById("p1").innerHTML = "*Please Enter Your  Name*";
        }
        else if (testing_reg.test(first) != true) {
          document.getElementById("p1").innerHTML = "*Please name consist of minimum three albhabet";
        }
        else {
          document.getElementById("p1").innerHTML = "";
          name = true;
        }


}

function contact(){
  var first = document.getElementById("two").value;
        var testing_reg = /^^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$$/;
        if (first == "") {
          document.getElementById("p2").innerHTML = "*Please Enter Your contact number*";
        }
        else if (testing_reg.test(first) != true) {
          document.getElementById("p2").innerHTML = "*  Contact Number Is Invalid * ";
        }
        else {
          document.getElementById("p2").innerHTML = "";
       con= true;
        }

      }   

function email(){
  var first = document.getElementById("three").value;
        var testing_reg = /^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/;
        if (first == "") {
          document.getElementById("p3").innerHTML = "*Please Enter Your email*";
        }
        else if (testing_reg.test(first) != true) {
          document.getElementById("p3").innerHTML = "*Email Address Is Invalid .Please  Enter Correct Email Address";
        }
        else {
          document.getElementById("p3").innerHTML = "";
      mail= true;
        }


}
function passwordS(){
  var first = document.getElementById("four").value;
        var testing_regS = /"^[0-9]{1}$"/;

        if (first == "") {
          document.getElementById("p4").innerHTML = "*Please Enter Password*";
        }
        else if (testing_regS.test(first) != true) {
          document.getElementById("p4").innerHTML = "Minimum eight characters, at least one letter and one number:*";
        }
     
        else {
          document.getElementById("p4").innerHTML = "";
      pass = true;
    }
  }

//      function chkForm() {
      //   event.preventDefault();
    
      //     if (name && mail && con && pass) {
      //       console.log("Ok");
      //   window.location.href = "contact.php";
      //     }
 
   
      // }

</script>

<script>
      const passField = document.getElementById('four');
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






<script> 
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
                   .css( "visibility", "visible" );		
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script> 
<!-- Section: Design Block -->
<?php
include('footer.php')
?>

<?php
include("../admin/header/connection.php");
if(isset($_POST['btn'])){
$us=$_POST['username'];
$p=$_POST['pass'];

$q="SELECT * from user where users_name='$us' AND user_passward='$p' AND roll_id_fk='1'";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);
if($count==0){
  echo "<script>alert('Log In failed');</script>";
}
else{

  $_SESSION['A_ADMIN_NAME']=$us;
  $_SESSION['A_ADMIN_IMAGE']=$data['user_image'];
  $_SESSION['A_ADMIN_ID']=$data['users_id'];
  echo "<script>alert('Succesfully Logged in'); window.location.href='index.php'</script>";
}
  


}

?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
  <?php

include("header.php");
include("admin/header/connection.php");

    $x=$_SESSION['USER_ID'];
    $query="select * from user where users_id='$x'";
    $res=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($res);


  




?>
<?php  

$qq="select * from roll";
$res_fk=mysqli_query($con,$qq);

?>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
      
  .form-control:focus {
    box-shadow: none;
    border-color: #0e1d34;
}

.btn{
    background-color: #0e1d34;
    color: #fff;
    border: 1px solid #0e1d34;
}

.labels {
    font-size: 15px
}

.profile{
  background-color: #0e1d34;
} 
form{
  width:800px;
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
form p{
  color:red;
}
</style>
 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Update Your Profile</h2>
              <p>Manage orders, automate shipping with rules, organize packing with pick lists and packing slips, track shipments, and notify recipients — in one easy-to-use platform.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container text-align-center">
          <ol class="justify-content-center">
            <li><a href="index.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
<main>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right profile">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img src="../admin/<?php echo $data['user_image'];?>" class="rounded-circle mt-5" width="200px" id="proimg" />
                    <span class="font-weight-bold text-white pt-4 fs-5">Upload Profile Picture</span>
                    <span> </span>
                </div>
            </div>
         
            <div class="col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="profile_update.php" method="post" enctype="multipart/form-data">
                    <div class="row mt-2" >
                  
                        <input type="hidden" name="upd" value="<?php echo $data['users_id'];?>" id="">
                      </div>
                       
                    <div class="row mt-2" >
                        <div class="col-md-6"><label class="labels">First Name</label>
                        <input type="text" onblur="names()" required pattern="[A-Za-z]{3,}" title="Minimun Three letter  without Number" class="form-control" name="user_name_inp" id="ones" value="<?php echo $data['users_name']?>" placeholder="Enter Your First Name" ></div>
                      <p id="p1"></p>
                    <div class="row mt-3">
                        <div class="col-md-12 pb-3"><label class="labels">Mobile Number</label>
                        <input type="text" class="form-control"  name="user_contact_inp" onblur="contact()" required pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" title="Please Enter Correct Address "placeholder="Enter Phone Number"  id="two" value="<?php echo $data['user_contact']?>" >
                      </div>
                      <p id="p2"></p>
                        <div class="col-md-12 pb-3"><label class="labels">Email ID</label><input type="email" class="form-control" onblur="email()" required pattern="^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$" title="Email Address Is Invalid .Please  Enter Correct Email Address"   name="user_email_inp" placeholder="Enter Email Address" id="three"  value="<?php echo $data['user_email']?>" ></div>
                        <p id="p3"></p>
                        <div class="col-md-12 pb-3 wrapper">
                          <label class="labels">Password</label>
                          <input type="password" class="form-control" required id="o" name="user_password_inp" placeholder="Enter Password" id="four"  value="<?php echo $data['user_passward']?>" >
                          
                          <p id="p4"></p>
</div>
                        <div class="col-md-12 pb-3"><label class="labels">Profile Picture</label>
                    
<input type="file" class="form-control" placeholder="Username" value="<?php echo $data['user_image'];?>"  name="user_image_inp"  onChange="readURL(this)">
</div>
                    </div>
            
                    <div class="mt-5 text-center"><button class="btn btn-primary text-white" type="submit" name="btn">Save Profile</button></div>
                </div>
                </form>
            </div>
       
        </div>
    </div>
    </div>
    </div>
  </main>

                      
<script>
      const passField = document.getElementById('or');
      const showBtn = document.getElementById('pepe');
      showBtn.onclick = (()=>{
        if(passField.type === "password"){
          passField.type = "text";
          showBtn.classList.add("hide-btn");
        }
        else{
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
          document.getElementById("p3").innerHTML = "*Please Enter Your EMAIL*";
        }
        else if (testing_reg.test(first) != true) {
          document.getElementById("p3").innerHTML = "*Email Address Is Invalid .Please  Enter Correct Email Address";
        }
        else {
          document.getElementById("p3").innerHTML = "";
      mail= true;
        }


}
// function password(){
//   var first = document.getElementById("four").value;
//         var testing_reg = /"^[A-Za-z0-9]{8,}$"/;
  
//         if (first == "") {
//           document.getElementById("p4").innerHTML = "*Please Enter Password*";
//         }
//         else if (testing_reg.test(first) != true) {
//           document.getElementById("p4").innerHTML = "Minimum eight characters, at least one letter and one number:*";
//         }
     
//         else {
//           document.getElementById("p4").innerHTML = "";
//       pass = true;
//     }
//   }

//      function chkForm() {
      //   event.preventDefault();
    
      //     if (name && mail && con && pass) {
      //       console.log("Ok");
      //   window.location.href = "contact.php";
      //     }
 
   
      // }

</script>
 <?php include('footer.php')?>
 
  
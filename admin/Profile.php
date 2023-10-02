







  <?php

include("header/header.php");?>
<?php if((isset($_SESSION['A_ADMIN_NAME']))){ 
include("header/connection.php");

    $x=$_SESSION['A_ADMIN_ID'];
    $query="select * from user where users_id='$x'";
    $res=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($res);


  




?>
<?php  
 include('header/connection.php');
$qq="select * from roll";
$res_fk=mysqli_query($con,$qq);

?>
<style>
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
  height:500px;
}

/* .pag{
    display:block;
    bottom:-10px;
} */
</style>
<main>
 
        <div class="row">
            <div class="col-md-4 border-right profile">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img src="<?php echo $data['user_image'];?>" class="rounded-circle mt-5" width="200px" id="proimg" />
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
                        <h6 class="mb-2">Role</h6>
                                <div class="form-floating mb-4">
                                <select name="roll_name"class="form-control"   id="">
                                      
                                      <?php while($data1=mysqli_fetch_assoc($res_fk)){ ?>
                   
                   <option  value=" <?php echo $data1['roll_id'];?>  <?php if($data1['roll_id']==$data['roll_id_fk']){ echo 'selected';}  ?>  "><?php echo $data1['roll_name'];?>
                   
                   <?php } ?>
                                    </select>
                                    <label for="floatingSelect">Select Role</label>
                                </div> 
                    <div class="row mt-2" >
                        <div class="col-md-12 pb-2"><label class="labels">First Name</label>
                        <input type="text" class="form-control" name="user_name_inp" value="<?php echo $data['users_name']?>" placeholder="Enter Your First Name" ></div>
                      
                    <div class="row mt-3">
                        <div class="col-md-12 pb-3"><label class="labels">Mobile Number</label>
                        <input type="text" class="form-control"  name="user_contact_inp" placeholder="Enter Phone Number" value="<?php echo $data['user_contact']?>" >
                      </div>
                        <div class="col-md-12 pb-3"><label class="labels">Email ID</label><input type="email" class="form-control"  name="user_email_inp" placeholder="Enter Email Address" value="<?php echo $data['user_email']?>" ></div>
                        <div class="col-md-12 pb-3"><label class="labels">Password</label><input type="password" class="form-control"  name="user_password_inp" placeholder="Enter Password" value="<?php echo $data['user_passward']?>" ></div>
                    
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

<?php include('header/footer.php')?>

  <?php } else{?>

    <?php
    include("header/connection.php");

    $x=$_SESSION['AGENT_ID'];
    $query="select * from user where users_id='$x'";
    $res=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($res);


  




?>
<?php  
 include('header/connection.php');
$qq="select * from roll";
$res_fk=mysqli_query($con,$qq);

?>
<style>
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
  height:500px;
}

/* .pag{
    display:block;
    bottom:-10px;
} */
</style>
<main>

        <div class="row">
            <div class="col-md-4 border-right profile">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img src="<?php echo $data['user_image'];?>" class="rounded-circle mt-5" width="200px" id="proimg" />
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
                        <h6 class="mb-2">Role</h6>
                                <div class="form-floating mb-4">
                                <select name="roll_name"class="form-control"   id="">
                                      
                                      <?php while($data1=mysqli_fetch_assoc($res_fk)){ ?>
                   
                   <option  value=" <?php echo $data1['roll_id'];?>  <?php if($data1['roll_id']==$data['roll_id_fk']){ echo 'selected';}  ?>  "><?php echo $data1['roll_name'];?>
                   
                   <?php } ?>
                                    </select>
                                    <label for="floatingSelect">Select Role</label>
                                </div> 
                    <div class="row mt-2" >
                        <div class="col-md-6"><label class="labels">First Name</label>
                        <input type="text" class="form-control" name="user_name_inp" value="<?php echo $data['users_name']?>" placeholder="Enter Your First Name" ></div>
                      
                    <div class="row mt-3">
                        <div class="col-md-12 pb-3"><label class="labels">Mobile Number</label>
                        <input type="text" class="form-control"  name="user_contact_inp" placeholder="Enter Phone Number" value="<?php echo $data['user_contact']?>" >
                      </div>
                        <div class="col-md-12 pb-3"><label class="labels">Email ID</label><input type="email" class="form-control"  name="user_email_inp" placeholder="Enter Email Address" value="<?php echo $data['user_email']?>" ></div>
                        <div class="col-md-12 pb-3"><label class="labels">Password</label><input type="password" class="form-control"  name="user_password_inp" placeholder="Enter Password" value="<?php echo $data['user_passward']?>" ></div>
                      
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
<?php }?>
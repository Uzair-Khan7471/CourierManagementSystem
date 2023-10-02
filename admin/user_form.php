
<?php include('header/header.php');
include('header/connection.php');
$qq="select * from roll where roll_id = '1' OR roll_id = '3'";
$res_fk=mysqli_query($con,$qq)


?>
      <!-- ========== header end ========== -->
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js">
</script>

<section class="vh-100">
    <div class="container-fluid h-custom mb-5" >
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/form.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="user_insert.php" class="mb-5" method="POST" enctype="multipart/form-data">
         
        <h6 class="mb-2">Role</h6>
                                <div class="form-floating mb-4">
                                <select name="roll_name"class="form-control"  id="">
                                <?php while($data=mysqli_fetch_assoc($res_fk)){ ?>
                   
                   <option value=" <?php echo $data['roll_id'];?>"><?php echo $data['roll_name'];?>
                   <?php } ?>
                                    </select>
                                    <label for="floatingSelect">Select Role</label>
                                </div> 
  
            <!-- Email input -->
       
            <h6 class="mb-2">Name</h6>
                            <div class="form-floating mb-4">
                                <input type="text" required class="form-control" name="user_name_inp" placeholder="Enter Name">
                                <label for="floatingPassword">Enter Name : </label>
                            </div>
    

                            <h6 class="mb-2">Email</h6>
                            <div class="form-floating mb-4">
                                <input type="text" required class="form-control" name="user_email_inp" placeholder="Enter Name">
                                <label for="floatingPassword">Enter Email : </label>
                            </div>

                            <h6 class="mb-2">Phone Number</h6>
                            <div class="form-floating mb-4">
                                <input type="text" required class="form-control" name="user_contact_inp" placeholder="Enter Name">
                                <label for="floatingPassword">Enter Contact Number : </label>
                            </div>
                            <h6 class="mb-2">Password</h6>
                            <div class="form-floating mb-4">
                                <input type="password" required class="form-control" name="user_password_inp"placeholder="Enter Name">
                                <label for="floatingPassword">Enter Password : </label>
                            </div>


<div class="form-outline mb-4">

<label>Choose Image</label>
                          <input type="file" class="form-control" placeholder="Username" required  name="user_image_inp" aria-label="Username" aria-describedby="addon-wrapping" onChange="readURL(this)">
     

</div>
<img id="proimg"/>
            <div class=" align-items-center">
              <!-- Checkbox d-flex justify-content-between-->
          
  
            <div class="text-center text-lg-start mt-4 pt-2 mb-5" style="width:100% !important;">
              <button type="submit" name="btn" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem; width:100% !important;">Submit</button>
            
            </div>
  
          </form>
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

<?php include('header/footer.php') ?>
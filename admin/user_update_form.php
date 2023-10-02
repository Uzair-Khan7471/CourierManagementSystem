


<?php  include('header/header.php')?>
<?php
include('header/connection.php');
$x=$_GET['id'];
$query="select * from user where users_id='$x'";
$res=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($res);
?>
<?php  
 include('header/connection.php');
$qq="select * from roll";
$res_fk=mysqli_query($con,$qq);

?>
      <!-- ========== header end ========== -->
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js">
</script>

<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/form.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      
<form action="user_update.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="upd" value="<?php echo $data['users_id'];?>" id="">
         
  
  
            <!-- Email input -->
 


            <h6 class="mb-2">Role</h6>
                                <div class="form-floating mb-4">
                                <select name="roll_name"class="form-control"  id="">
                                      
                                      <?php while($data1=mysqli_fetch_assoc($res_fk)){ ?>
                   
                   <option  value=" <?php echo $data1['roll_id'];?>  <?php if($data1['roll_id']==$data['roll_id_fk']){ echo 'selected';}  ?>  "><?php echo $data1['roll_name'];?>
                   
                   <?php } ?>
                                    </select>
                                    <label for="floatingSelect">Select Role</label>
                                </div> 
  
            <h6 class="mb-2">Name</h6>
                            <div class="form-floating mb-4">
                            <input type="text" class="form-control" required id="name" onchange="one()" value="<?php echo $data['users_name'];?>"  name="user_name_inp" placeholder="Add the Category">
                                <label for="floatingPassword">Enter Name</label>
                            </div>



<h6 class="mb-2">Email</h6>
                            <div class="form-floating mb-4">
                            <input type="email" class="form-control" required id="eamaili" onchange="two()" value="<?php echo $data['user_email'];?>" name="user_email_inp" placeholder="enter email">
                                <label for="floatingPassword">Enter Email </label>
                            </div>




            

<div class="form-outline mb-4">

                               
<label></label>
</div>

<div class="form-outline mb-4">

<input type="file" class="form-control" placeholder="Username" value="<?php echo $data['user_image'];?>"  name="user_image_inp"  onChange="readURL(this)">

     

<label>Choose Image</label>
</div>

<img id="proimg" src="<?php echo $data['user_image'];?>" height="100" />
            <div class=" align-items-center">
              <!-- Checkbox d-flex justify-content-between-->
          
  
            <div class="text-center text-lg-start mt-4 pt-2" style="width:100% !important;">
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
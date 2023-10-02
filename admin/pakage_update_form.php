<?php include('header/header.php') ;
 
 include('header/connection.php');
 $x=$_GET['id'];
 $qu="select * from package where package_id='$x'";
 $res=mysqli_query($con,$qu);
 $data=mysqli_fetch_assoc($res);

?>


<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/form.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="pakage_update.php">
         
          <div class="form-outline mb-4">
              <input type="hidden" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Name" value="<?php  echo $data['package_id'];?>" name="one"/>
           
            </div>
  
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Id" value="<?php  echo $data['per_km'];?>" name="two"/>
                <label class="form-label" for="form3Example3">City Name</label>
            </div>
  
            
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Id" value="<?php  echo $data['per_kg'];?>" name="three"/>
                <label class="form-label" for="form3Example3">City Name</label>
            </div>
   
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Id" value="<?php  echo $data['days'];?>" name="four"/>
                <label class="form-label" for="form3Example3">City Name</label>
            </div>
  
  
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
  
  


<?php include('header/footer.php') ?>
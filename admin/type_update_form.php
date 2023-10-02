<?php include('header/header.php') ;
 
 include('header/connection.php');
 $x=$_GET['id'];
 $qu="select * from parcel_type where type_id='$x'";
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
          <form method="POST" action="type_update.php">
         
          <div class="form-outline mb-4">
              <input type="hidden" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Name" value="<?php  echo $data['type_id'];?>" name="one"/>
           
            </div>
  
  
       
            
            <h6 class="mb-2">Type Name</h6>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" name="type_name"  value="<?php  echo $data['type_name'];?>"id="floatingInput"
                                    placeholder="Enter Your type Name">
                                <label for="floatingInput">Enter Type</label>
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
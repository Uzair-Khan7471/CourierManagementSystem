
 <?php include('header/header.php') ?>

<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/form.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="role_insert.php" method="POST">
         
  
        <h6 class="mb-2">Role</h6>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Enter Role" name="add_role">
                                <label for="floatingPassword">Add Role : </label>
                            </div>
            <!-- Email input -->
           
  
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
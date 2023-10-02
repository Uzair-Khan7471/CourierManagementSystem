<!-- <?php include('header/header.php') ?> -->

<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/form.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="pakage_insert.php">
         
  
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="number" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a km "name="km_inp"/>
              <label class="form-label" for="form3Example3">per KM</label>
            </div>
  
             
        
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="number" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a kg" name="kg_inp"/>
              <label class="form-label" for="form3Example3">per Kg</label>
            </div>
  
         <!-- Email input -->
         <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a days" name="days_inp"/>
              <label class="form-label" for="form3Example3">Days</label>
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
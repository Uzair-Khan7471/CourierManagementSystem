 <?php include('header/header.php');
 include('header/connection.php');
 $qq="select * from my_city ";
 $res_fk=mysqli_query($con,$qq);
 ?> 

<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/form.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="branch_insert.php">

  

          <h6 class="mb-2">City</h6>
                                <div class="form-floating mb-4">
                                <select name="city_name"class="form-control"  id="">
                                <?php while($data=mysqli_fetch_assoc($res_fk)){ ?>
<option value=" <?php echo $data['id'];?>"><?php echo $data['city_name'];?>
<?php } ?>
               
                                    </select>
                                    <label for="floatingSelect">Select City</label>
                                </div> 
            <!-- Email input -->
    
            

                            <h6 class="mb-2">Branch</h6>
                            <div class="form-floating mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Name" name="branch_name_inp"/>
                                <label for="floatingPassword">Branch Name </label>
                            </div>
                            <h6 class="mb-2">Address</h6>
                            <div class="form-floating mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Name" name="branch_address_inp"/>
                                <label for="floatingPassword">Address </label>
                            </div>
                            <h6 class="mb-2">Contact</h6>
                            <div class="form-floating mb-4">
                            <input type="tel" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Name" name="branch_contact_inp"/>
                                <label for="floatingPassword">Contact </label>
                            </div>
                            <h6 class="mb-2">Email</h6>
                            <div class="form-floating mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Name" name="branch_email_inp"/>
                                <label for="floatingPassword">Email </label>
                            </div>
                            <h6 class="mb-2">Lattitude</h6>
                            <div class="form-floating mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Name" name="city_let_inp"/>
                                <label for="floatingPassword">Enter lettitude </label>
                            </div>
                            <h6 class="mb-2">Longitude</h6>
                            <div class="form-floating mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Name" name="city_long_inp"/>
                                <label for="floatingPassword" >Enter longitude </label>
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
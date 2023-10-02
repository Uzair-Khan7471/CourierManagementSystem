 <?php include('header/header.php') ;
 
 include('header/connection.php');
 $x=$_GET['id'];
 $qu="select * from branch where branch_id='$x'";
 $res=mysqli_query($con,$qu);
 $data=mysqli_fetch_assoc($res);

?>
<?php  
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
          <form method="POST" action="branch_update.php">
         
          <div class="form-outline mb-4">
              <input type="hidden" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Name" value="<?php  echo $data['branch_id'];?>" name="branch_id_inp"/>
           
            </div>
  
  






                           
                       

            <!-- Email input -->
            <h6 class="mb-2">City</h6>
            <div class="form-floating mb-4">
            <select name="city_name"class="form-control"  id="">

<?php while($data1=mysqli_fetch_assoc($res_fk)){ ?>
  <option value=" <?php echo $data1['id'];?>  "<?php if($data1['id']==$data['city_id_FK']){ echo 'selected';}  ?>  ><?php echo $data1['city_name'];?>
</option>

<?php } ?>   
</select>
<label for="floatingSelect">Select City</label>
<br>


           

            <h6 class="mb-2">Branch</h6>
                            <div class="form-floating mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Id" value="<?php  echo $data['area'];?>" name="branch_name_inp"/>
                                <label for="floatingPassword">Branch Name </label>
                            </div>
           
                            <h6 class="mb-2">contact</h6>
                            <div class="form-floating mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Id" value="<?php  echo $data['contact'];?>" name="branch_contact_inp"/>
                                <label for="floatingPassword">contact</label>
                            </div>
           
                            <h6 class="mb-2">Address</h6>
                            <div class="form-floating mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Id" value="<?php  echo $data['address'];?>" name="branch_address_inp"/>
                                <label for="floatingPassword">address </label>
                            </div>
                            <h6 class="mb-2">Email</h6>
                            <div class="form-floating mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Id" value="<?php  echo $data['email'];?>" name="branch_email_inp"/>
                                <label for="floatingPassword">Email</label>
                            </div>
                            <h6 class="mb-2">latitude</h6>
                            <div class="form-floating mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Id" value="<?php  echo $data['lattitude'];?>" name="city_let_inp"/>
                                <label for="floatingPassword">Branch lattitude </label>
                            </div>
                            <h6 class="mb-2">longitude</h6>
                            <div class="form-floating mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Id" value="<?php  echo $data['longitude'];?>" name="city_long_inp"/>
                                <label for="floatingPassword">Branch longitude</label>
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
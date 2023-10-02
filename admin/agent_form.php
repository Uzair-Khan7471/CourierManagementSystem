 <?php include('header/header.php');
 include('header/connection.php');
 $qq="select * from branch";
 $res_fk=mysqli_query($con,$qq);

 $query="select * from user";
 $res=mysqli_query($con,$query);

 $query2="select * from my_city ";
 $res2=mysqli_query($con,$query2);
 ?> 

<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/form.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="agent_insert.php">

        
  
                      <h6 class="mb-2">Name</h6>
                                <div class="form-floating mb-4">
                                <select name="user_drop"class="form-control"  id="">

<option selected disabled> choose user</option>
<?php while($data=mysqli_fetch_assoc($res)){ ?>
<option value=" <?php echo $data['users_id'];?>"><?php echo $data['users_name'];?>
<?php } ?>
                                    </select>
                                    <label for="floatingSelect">Select User</label>
                                </div> 
          <br>
          <h6 class="mb-2">City</h6>
                                <div class="form-floating mb-4">
                                <select name="city_drop"class="form-control"  id="">

<option selected disabled> Choose City</option>
<?php while($data=mysqli_fetch_assoc($res2)){ ?>
<option value="<?php echo $data['id'];?>"><?php echo $data['city_name'];?>
<?php } ?>
                                    </select>
                                    <label for="floatingSelect">Select City</label>
                                </div> 
          <br>
  

                      <h6 class="mb-2">choose nearest branch</h6>
                                <div class="form-floating mb-4">
                                <select name="branch_drop"class="form-control"  id="">
                                <option selected disabled> choose branch</option>
                                <?php while($data=mysqli_fetch_assoc($res_fk)){ ?>
                   <option option value=" <?php echo $data['branch_id'];?>"><?php echo $data['area'];?>
<?php } ?>
                                    </select>
                                    <label for="floatingSelect">Select branch</label>
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
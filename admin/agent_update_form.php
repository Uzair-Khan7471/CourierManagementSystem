 <?php include('header/header.php') ;
 
 include('header/connection.php');
 $x=$_GET['id'];
 $qu="select * from agent where agent_id='$x'";
 $res=mysqli_query($con,$qu);
 $data=mysqli_fetch_assoc($res);

?>
<?php  
$qq="select * from user";
$res_fk=mysqli_query($con,$qq);

?>
<?php  
$qq3="select * from my_city ";
$res_fk2=mysqli_query($con,$qq3);

?>
<?php  
$qqq="select * from branch";
$res_fkk=mysqli_query($con,$qqq);

?>
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/form.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="agent_update.php">
         
          <div class="form-outline mb-4">
              <input type="hidden" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a city Name" value="<?php  echo $data['agent_id'];?>" name="agent_id_inp"/>
           
            </div>
  
            <h6 class="mb-2">Name</h6>
                                <div class="form-floating mb-4">
                                <select name="users_name"class="form-control"  id="">

<?php while($data1=mysqli_fetch_assoc($res_fk)){ ?>
<option value=" <?php echo $data1['users_id'];?> " <?php if($data1['users_id']==$data['user_id_FK']){ echo 'selected';}  ?>  ><?php echo $data1['users_name'];?>
</option>

<?php } ?>   
</select>
                                    <label for="floatingSelect">Select User</label>
                                </div> 



  

<br>


  
<h6 class="mb-2">City</h6>
                                <div class="form-floating mb-4">
                                <select name="city_name"class="form-control"  id="">

<?php while($data3=mysqli_fetch_assoc($res_fk2)){ ?>
<option value=" <?php echo $data3['id'];?> " <?php if($data3['id']==$data['city_id_fk']){ echo 'selected';}  ?>  ><?php echo $data3['city_name'];?>
</option>

<?php } ?>   
</select>
                                    <label for="floatingSelect">Select User</label>
                                </div> 
           
<h6 class="mb-2">Branch</h6>
                                <div class="form-floating mb-4">
                                <select name="branch_name"class="form-control"  id="">

<?php while($data2=mysqli_fetch_assoc($res_fkk)){ ?>
<option value=" <?php echo $data2['branch_id'];?> " <?php if($data2['branch_id']==$data['branch_id_FK']){ echo 'selected';}  ?>  ><?php echo $data2['area'];?>
</option>

<?php } ?>   
</select>
                                    <label for="floatingSelect">Select Branch</label>
                                </div> 
          <br>
  

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
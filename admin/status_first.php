
<!-- <?php include('header/header.php') 
?> -->

<?php
include('header/connection.php');


$q = "SELECT * FROM status_table " ;

$res = mysqli_query($con,$q);

$qq = "SELECT * FROM branch" ;

$ress = mysqli_query($con,$qq);
?>

<?php

$x=$_GET['id'];
$query="select * from booking where booking_id='$x'";
$rese=mysqli_query($con,$query);
$a=mysqli_fetch_assoc($rese);
?>



<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/form.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="status_insert.php" method="POST">
         
  
        <input type="hidden" class="form-control"  placeholder="Enter product" name="id" value="<?php echo $a['booking_id']  ?>">

        
        <h6 class="mb-2">reciever address</h6>
                            <div class="form-floating mb-4">
                                <input type="text" disabled class="form-control" name="sender_name" id="floatingInput" value="<?php echo $a['reciever_address']  ?>"
                                    placeholder="Enter Your Sender Name">
                                <label for="floatingInput">reciever address</label>
                            </div>
            <!-- Email input -->
          

           


                      
                      <label> choose deliever</label>
                                <div class="form-floating mb-4">
                                    <select class="form-control" name="delivery"
                                      >
                                      <option selected disabled> choose deiver branch</option>
                                      <?php while($data=mysqli_fetch_assoc($ress)){ ?>
<option value=" <?php echo $data['branch_id'];?>"><?php echo $data['area'];?>
<?php } ?>
                                    </select>
                                    <label for="floatingSelect">Deliver</label>
                                </div> 
                      
                      <h6 class="mb-2"> choose status</h6>
                                <div class="form-floating mb-4">
                                    <select class="form-control" name="status_n"
                                      >
                                      <?php while($data1=mysqli_fetch_assoc($res)){ ?>
<option value=" <?php echo $data1['status_id'];?>"><?php echo $data1['status_name'];?>
<?php } ?>
                                    </select>
                                    <label for="floatingSelect">Select status</label>
                                </div> 
              
          
  
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
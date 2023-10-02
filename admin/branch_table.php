<?php 
     include('header/header.php');
     
     if((isset($_SESSION['A_ADMIN_NAME']))){ ?>


<?php
include('header/connection.php');
$query = "SELECT * FROM  branch JOIN my_city ON branch.city_id_FK=my_city.id ";

$result = mysqli_query($con,$query);
?>
<main>
<div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Branch Table</h6>
                 
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                      <tr>
                          <th><h6>ID</h6></th>
                          <th><h6>BRANCH</h6></th>
                          <th><h6>AREA</h6></th>
                          <th><h6>CONTACT</h6></th>
                          <th><h6>ADDRESS</h6></th>
                          <th><h6>EMAIL</h6></th>
                          <th><h6>LATTITUDE</h6></th>
                          <th><h6>LONGITUDE</h6></th>
                          <th><h6>UPDATE</h6></th>
                          <th><h6>DELETE</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <?php while($data=mysqli_fetch_assoc($result)) { ?>
                        <tr>
                          <td class="min-width">
                            <?php echo $data['branch_id']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['city_name']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['area']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['contact']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['address']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['email']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['lattitude']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['longitude']?>
                          </td>
                          <td class="min-width">
                          <div class="action">
                          <button class="text-danger" style="border:none; background-color:white;">
                          <a href="branch_update_form.php?id=<?php echo $data['branch_id'] ;?>" > <img src="img/update.png"  alt="" style="border:none; background-color:white;"> </a>       
                          </button>
                          </div>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger" style="border:none; background-color:white;" >
                                <a href="branch_delete.php?id=<?php echo $data['branch_id']; ?>">  <img src="img/delete.png" onclick='return checkdelete()' alt="" style="border:none; background-color:white;"> </a>            
                              </button>
                            </div>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->

           
            <!-- end row -->
          </div>
</main>

<script>
function checkdelete(){
return confirm('Are You Sure You Want To Delete');
}

</script>
<?php include('header/footer.php')?>
<?php  } else { ?>

  
<?php
include('header/connection.php');
$x=$_SESSION['AGENT_ID'];
$query1 = "SELECT * FROM  agent JOIN user ON agent.user_id_FK=user.users_id JOIN branch ON
agent.branch_id_FK=branch.branch_id where user_id_FK='$x'" ;
$result1 = mysqli_query($con,$query1);
$data4=mysqli_fetch_assoc($result1);

$a4=$data4['branch_id'];

$query = "SELECT * FROM  branch JOIN my_city ON branch.city_id_FK=my_city.id where branch_id='$a4'";

$result = mysqli_query($con,$query);

?>
<main>

<div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Branch Table</h6>
                 
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>ID</h6></th>
                          <th><h6>BRANCH</h6></th>
                          <th><h6>AREA</h6></th>
                          <th><h6>CONTACT</h6></th>
                          <th><h6>ADDRESS</h6></th>
                          <th><h6>LATTITUDE</h6></th>
                          <th><h6>LONGITUDE</h6></th>
                     
                      
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <?php while($data=mysqli_fetch_assoc($result)) { ?>
                        <tr>
                          <td class="min-width">
                            <?php echo $data['branch_id']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['city_name']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['area']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['contact']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['address']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['lattitude']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['longitude']?>
                          </td>
                 
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->

           
            <!-- end row -->
          </div>
</main>

<script>
function checkdelete(){
return confirm('Are You Sure You Want To Delete');
}

</script>
<?php include('header/footer.php')?>
  <?php  }?>
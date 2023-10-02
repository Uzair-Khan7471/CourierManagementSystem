







<?php 
     include('header/header.php');
     
     if((isset($_SESSION['A_ADMIN_NAME']))){ ?>
<?php
include('header/connection.php');





$query = "SELECT * FROM  agent JOIN user ON agent.user_id_FK=user.users_id JOIN branch ON
agent.branch_id_FK=branch.branch_id JOIN my_city ON
agent.city_id_fk=my_city.id " ;

#$query="SELECT * FROM product JOIN category  ON product.category_id_fk=category.category_id JOIN author ON product.author_id_fk=author.author_id";

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
                          <th><h6>USER</h6></th>
                          <th><h6>CITY</h6></th>
                          <th><h6>BRANCH</h6></th>
                        
                          <th><h6>UPDATE</h6></th>
                          <th><h6>DELETE</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <?php while($data=mysqli_fetch_assoc($result)) { ?>
                        <tr>
                          <td class="min-width">
                            <?php echo $data['agent_id']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['users_name']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['city_name']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['area']?>
                          </td>
                        
                          <td class="min-width">
                          <div class="action">
                          <button class="text-danger" style="border:none; background-color:white;">
                          <a href="agent_update_form.php?id=<?php echo $data['agent_id'] ;?>" > <img src="img/update.png"  alt="" style="border:none; background-color:white;"> </a>       
                          </button>
                          </div>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger" style="border:none; background-color:white;" >
                                <a href="agent_delete.php?id=<?php echo $data['agent_id']; ?>">  <img src="img/delete.png" onclick='return checkdelete()' alt="" style="border:none; background-color:white;"> </a>            
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

$query = "SELECT * FROM  agent JOIN user ON agent.user_id_FK=user.users_id JOIN branch ON
agent.branch_id_FK=branch.branch_id JOIN my_city ON
agent.city_id_fk=my_city.id WHERE user_id_FK='$x'" ;

#$query="SELECT * FROM product JOIN category  ON product.category_id_fk=category.category_id JOIN author ON product.author_id_fk=author.author_id";

$result = mysqli_query($con,$query);
?>
<main>

<div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Agent Table</h6>
                 
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>ID</h6></th>
                          <th><h6>USER</h6></th>
                          <th><h6>CITY</h6></th>
                          <th><h6>BRANCH</h6></th>
                        
                          <th><h6>UPDATE</h6></th>
                          <th><h6>DELETE</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <?php while($data=mysqli_fetch_assoc($result)) { ?>
                        <tr>
                          <td class="min-width">
                            <?php echo $data['agent_id']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['users_name']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['city_name']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['area']?>
                          </td>
                        
                          <td class="min-width">
                          <div class="action">
                          <button class="text-danger" style="border:none; background-color:white;">
                          <a href="agent_update_form.php?id=<?php echo $data['agent_id'] ;?>" > <img src="img/update.png"  alt="" style="border:none; background-color:white;"> </a>       
                          </button>
                          </div>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger" style="border:none; background-color:white;" >
                                <a href="agent_delete.php?id=<?php echo $data['agent_id']; ?>">  <img src="img/delete.png" onclick='return checkdelete()' alt="" style="border:none; background-color:white;"> </a>            
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
  <?php  }?>
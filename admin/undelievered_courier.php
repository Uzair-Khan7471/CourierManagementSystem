
        <?php  include('header/header.php');
         if((isset($_SESSION['A_ADMIN_NAME']))){ ?>



<?php
include('header/connection.php');
$query = "SELECT * FROM booking   join status_table on booking.status_id_FK=status_table.status_id where status_id_FK='5'";



$result = mysqli_query($con,$query);

$query3 = "SELECT * FROM parcel_information  join parcel_type on  parcel_information.	type_id_fk=parcel_type.type_name ";


$result3 = mysqli_query($con,$query3);

$query1 = "SELECT deliver_branch_id_fk  FROM booking JOIN  branch on booking.deliver_branch_id_fk=branch.branch_id";

$result1 = mysqli_query($con,$query1);
?>
<main>
<div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Delivered Couriers</h6>
                 
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>ID</h6></th>
                        
           
                          <th><h6>SENDER NAME</h6></th>
                          <th><h6>SENDER EMAIL</h6></th>
                                              
                          <th><h6>SENDER ADDRESS</h6></th>
                 
   
                          <th><h6>RESIEVER NAME</h6></th>
                        
                                     
                          <th><h6>STATUS </h6></th>
                            <th><h6>SHOW</h6></th>
                

                      </thead>
                      <tbody>
                        <?php while($data=mysqli_fetch_assoc($result)) { ?>
                        <tr>
                             <td class="min-width">
                            <?php echo $data['booking_id']?>
                          </td>
                        

                          <td class="min-width">
                            <?php echo $data['sender_name']?>
                          </td>

                          <td class="min-width">
                            <?php echo $data['reciever_name']?>
                          </td>

                
                 
                          <td class="min-width">
                            <?php echo $data['status_name']?>
                          </td>
                          <td class="min-width">
                          <div class="action">
                    
                          <a href="show_courier2.php?id=<?php echo $data['booking_id'] ;?>" > <img src="img/eye.png" alt="" style="border:none; background-color:white;"> </a>       
                    
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
$query4 = "SELECT * FROM  agent JOIN user ON agent.user_id_FK=user.users_id JOIN branch ON
agent.branch_id_FK=branch.branch_id where user_id_FK='$x'" ;
$result4 = mysqli_query($con,$query4);
$data4=mysqli_fetch_assoc($result4);

$a4=$data4['branch_id_FK'];
$query = "SELECT * FROM booking  join branch on booking.pickup_branch_id_fk=branch.branch_id join status_table on booking.status_id_FK=status_table.status_id where status_id_FK='5'  AND pickup_branch_id_fk='$a4'";


$result = mysqli_query($con,$query);



?>

<main>
<div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">UnDelivered Couriers</h6>
                 
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>ID</h6></th>
                        
           
                          <th><h6>SENDER NAME</h6></th>
                      
   
                          <th><h6>RESIEVER NAME</h6></th>
                  
                     
                                   
                          <th><h6>STATUS </h6></th>
                            <th><h6>SHOW</h6></th>
                

                      </thead>
                      <tbody>
                        <?php while($data=mysqli_fetch_assoc($result)) { ?>
                        <tr>
                             <td class="min-width">
                            <?php echo $data['booking_id']?>
                          </td>
                        

                          <td class="min-width">
                            <?php echo $data['sender_name']?>
                          </td>

                    
                          <td class="min-width">
                            <?php echo $data['reciever_name']?>
                          </td>

                     
          
                          <td class="min-width">
                            <?php echo $data['deliver_branch_id_fk']?>
                          </td>
                          <td class="min-width">
                            <?php echo $data['status_name']?>
                          </td>
                          <td class="min-width">
                          <div class="action">
                    
                          <a href="show_courier2.php?id=<?php echo $data['booking_id'] ;?>" > <img src="img/eye.png" alt="" style="border:none; background-color:white;"> </a>       
                    
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


  <?php } ?>
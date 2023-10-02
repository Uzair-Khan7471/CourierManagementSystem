<?php include('header/header.php')?>

<?php
include('header/connection.php');
$q="SELECT * FROM user join roll on user.roll_id_fk=roll.roll_id";
$res=mysqli_query($con,$q);
?>

<main>
<div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">User Table</h6>
                 
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        
                        <tr>
                        <th><h6>ID</h6></th>
                          <th><h6>ROLE</h6></th>
                          <th><h6>USER NAME</h6></th>
                          <th><h6>EMAIL</h6></th>
                          <th><h6>CONTACT</h6></th>
             
                          <th><h6>USER IMAGE</h6></th>
                     
                          <th><h6>DELETE</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <?php while($data=mysqli_fetch_assoc($res)) { ?>
                        <tr>
                        <td class="min-width"  ><?php  echo $data['users_id']; ?></td>
                        <td class="min-width" ><?php  echo $data['roll_name'] ;?></td>
      
        <td class="min-width" ><?php  echo $data['users_name']; ?></td>
        <td class="min-width"><?php  echo $data['user_email']; ?></td>
        <td class="min-width"><?php  echo $data['user_contact']; ?></td>

        <td  class="min-width"><img src="<?php  echo $data['user_image']; ?>"  height="50" alt=""></td>
                        
                         
                          <td>
                            <div class="action">
                              <button class="text-danger" style="border:none; background-color:white;" >
                                <a href="user_delete.php?id=<?php echo $data['users_id']; ?>">  <img src="img/delete.png" onclick='return checkdelete()' alt="" > </a>            
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
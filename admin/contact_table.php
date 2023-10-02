<?php include('header/header.php')?>

<?php
include('header/connection.php');
$query = "select * from contact_table";
$result = mysqli_query($con,$query);
?>
<main>
<div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Contact Table</h6>
                 
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>ID</h6></th>
                          <th><h6>NAME</h6></th>
                          <th><h6>EMAIL</h6></th>
                          <th><h6>SUBJECT</h6></th>
                          <th><h6>MESSAGE</h6></th>

                          <th><h6>DELETE</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <?php while($data=mysqli_fetch_assoc($result)) { ?>
                        <tr>
                          <td class="min-width">
                            <?php echo $data['contact_id']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['contact_name']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['contact_email']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['contact_subject']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['contact_message']?>
                          </td>
                      
                          <td>
                            <div class="action">
                            <button class="text-danger" style="border:none; background-color:white;" >
                                <a href="contact_delete.php?id=<?php echo $data['contact_id']; ?>">  <img src="img/delete.png" onclick='return checkdelete()' alt="" style="border:none; background-color:white;"> </a>   
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
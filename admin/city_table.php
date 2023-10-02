<?php include('header/header.php')?>

<?php
include('header/connection.php');
$query = "SELECT * from my_city ";
$result = mysqli_query($con,$query);
?>
<main>
<div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10"> City Table</h6>
                 
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>ID</h6></th>
                          <th><h6>CITY</h6></th>
                       
                     
                          <th><h6>DELETE</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <?php while($data=mysqli_fetch_assoc($result)) { ?>
                        <tr>
                          <td class="min-width">
                            <?php echo $data['id']?>
                          </td>
                          <td class="min-width">
                          <?php echo $data['city_name']?>
                          </td>
                     
                   
                          <td>
                            <div class="action">
                              <button class="text-danger" style="border:none; background-color:white;" >
                                <a href="city_delete.php?id=<?php echo $data['id']; ?>">  <img src="img/delete.png"  alt="" style="border:none; background-color:white;"> </a>            
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
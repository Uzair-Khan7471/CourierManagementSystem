
 
<?php include('header/header.php');
include('header/connection.php');
$x=$_GET['id'];





$query = "SELECT * FROM booking  join status_table on booking.status_id_FK=status_table.status_id join parcel_information on booking.booking_id=parcel_information.booking_id_fk join parcel_type on parcel_information.type_id_fk=parcel_type.type_id where booking_id='$x'" ;

$result = mysqli_query($con,$query);

$data=mysqli_fetch_assoc($result);

$query1 = "SELECT deliver_branch_id_fk  FROM booking JOIN  branch on booking.deliver_branch_id_fk=branch.branch_id";

$result1 = mysqli_query($con,$query1);



?>

  



    <div class="modal-content" id="open" >
        <div class="modal-header d-inline-block">
          <h5 class="modal-title" id="exampleModalLabel">Tracking ID: </h5>
          <p class="display-contents">  <?php echo $data['tracking_id'] ?></p>
        </div>
        <div class="container">
            <div class="row">
                <div class="modal-body col-sm-12 col-md-6">
                    <h6 class="modal-title" id="exampleModalLabel">Sender Information:</h6>
                    <div class="container mt-1">
                        <div>
                            <h6>Name: </h6>
                            <p class="display-contents">              <?php echo $data['sender_name']?></p>
                        </div>
                        <div>
                            <h6>Address: </h6>
                            <p class="display-contents"> <?php echo $data['sender_email']?></p>
                        </div>
                        <div>
                            <h6>Email Address: </h6>
                            <p class="display-contents">       <?php echo $data['sender_address']?></p>
                        </div>
                        <div>
                            <h6>Contact Number: </h6>
                            <p class="display-contents">           <?php echo $data['sender_contact']?></p>
                        </div>
                    </div>
                    <div class="modal-body col-sm-12 col-md-6">
                        <h6 class="modal-title" id="exampleModalLabel">Receiver Information:</h6>
                        <div class="container mt-1">
                            <div>
                                <h6>Name: </h6>
                                <p class="display-contents">   <?php echo $data['reciever_name']?></p>
                            </div>
                            <div>
                                <h6>Address: </h6>
                                <p class="display-contents">     <?php echo $data['reciever_email']?></p>
                            </div>
                            <div>
                                <h6>Email Address: </h6>
                                <p class="display-contents">    <?php echo $data['reciever_contact']?></p>
                            </div>
                            <div>
                                <h6>Contact Number: </h6>
                                <p class="display-contents">         <?php echo $data['reciever_address']?></p>
                            </div>
                        </div>
            
                    </div>
                </div>
                <div class="modal-body col-sm-12 col-md-6">
                    <h6 class="modal-title" id="exampleModalLabel">Parcel Details:</h6>
                    <div class="container mt-1">
                        <div>
                            <h6>Weight: </h6>
                            <p class="display-contents"><?php echo $data['weight']?></p>
                 
                        </div>
                        <div>
                            <h6>Height: </h6>
                            <p class="display-contents"><?php echo $data['height']?></p>
                        </div>
                        <div>
                            <h6>Width: </h6>
                            <p class="display-contents"><?php echo $data['width']?></p>
                        </div>
                        <div>
                            <h6>Lenght: </h6>
                            <p class="display-contents"><?php echo $data['lenght']?></p>
                        </div>
                        <div>
                            <h6>Price: </h6>
                            <p class="display-contents"><?php echo $data['price']?></p>
                        </div>
                        <div>
                            <h6>Type: </h6>
                            <p class="display-contents"><?php echo $data['type_name']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">               <h6>status </h6>
                  
                  <div> Current status : <p><?php echo $data['status_name']?></p></div></div>
                        <div class="col">      <button class="text-danger" style="border:none; background-color:white;">
                          <a href="status_first.php?id=<?php echo $data['booking_id'] ;?>" > <h3 style class="btn btn-primary">UPDATE STATUS</h3> </a>       
                          </button></div>
                    </div>
              
            </div>
        </div>
        <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal-content" aria-label="Close">close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
      </div>

      <?php include('header/footer.php');
?>
<!-- edddddddddddddd -->

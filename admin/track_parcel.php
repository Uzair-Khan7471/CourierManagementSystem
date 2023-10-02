
 <style>
   
   .step-wizard {


 
   display: flex;
   justify-content: center;
   align-items: center;
}
.step-wizard-list{
   background: #fff;
   box-shadow: 0 15px 25px rgba(0,0,0,0.1);
   color: #333;
   list-style-type: none;
   border-radius: 10px;
   display: flex;
   padding: 20px 10px;
   position: relative;
   z-index: 10;
}

.step-wizard-item{
   padding: 0 20px;
   flex-basis: 0;
   -webkit-box-flex: 1;
   -ms-flex-positive:1;
   flex-grow: 1;
   max-width: 100%;
   display: flex;
   flex-direction: column;
   text-align: center;
   min-width: 170px;
   position: relative;
}
.step-wizard-item + .step-wizard-item:after{
   content: "";
   position: absolute;
   left: 0;
   top: 19px;
   background: #21d4fd;
   width: 100%;
   height: 2px;
   transform: translateX(-50%);
   z-index: -10;
}
.progress-count{
   height: 40px;
   width:40px;
   display: flex;
   align-items: center;
   justify-content: center;
   border-radius: 50%;
   font-weight: 600;
   margin: 0 auto;
   position: relative;
   z-index:10;
   color: transparent;
}
.progress-count:after{
   content: "";
   height: 40px;
   width: 40px;
   background: #21d4fd;
   position: absolute;
   left: 50%;
   top: 50%;
   transform: translate(-50%, -50%);
   border-radius: 50%;
   z-index: -10;
}
.progress-count:before{
   content: "";
   height: 10px;
   width: 20px;
   border-left: 3px solid #fff;
   border-bottom: 3px solid #fff;
   position: absolute;
   left: 50%;
   top: 50%;
   transform: translate(-50%, -60%) rotate(-45deg);
   transform-origin: center center;
}
.progress-label{
   font-size: 14px;
   font-weight: 600;
   margin-top: 10px;
}
.current-item .progress-count:before,
.current-item ~ .step-wizard-item .progress-count:before{
   display: none;
}
.current-item ~ .step-wizard-item .progress-count:after{
   height:10px;
   width:10px;
}
.current-item ~ .step-wizard-item .progress-label{
   opacity: 0.5;
}
.current-item .progress-count:after{
   background: #fff;
   border: 2px solid #21d4fd;
}
.current-item .progress-count{
   color: #21d4fd;
}

</style>









<?php include('header/header.php'); ?>

<form action="" class=" mt-5" method="POST">
       <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="input-group input-group-lg">
            
                <input type="text" class="form-control" id=" o" name="tracking_number" a aria-describedby="inputGroup-sizing-lg">

                <button type="submit"   name="btn" class="input-group-text" id="inputGroup-sizing-lg">        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" >
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg></button>
               
              </div>
        </div>
        <div class="col-2"></div>
       </div>
    </form>
<?php

include('header/connection.php');

if(isset($_POST['btn'])){
$a=$_POST['tracking_number'];

#$count=mysqli_num_rows($result);
$query = "SELECT * FROM booking  join branch on booking.pickup_branch_id_fk=branch.branch_id join status_table on booking.status_id_FK=status_table.status_id join parcel_information on booking.booking_id=parcel_information.booking_id_fk join parcel_type on parcel_information.type_id_fk =parcel_type.type_id where tracking_id='$a'" ;

#parcel_information   join booking on booking.booking_id=parcel_information.booking_id_fk 
$result = mysqli_query($con,$query);

$data=mysqli_fetch_assoc($result);





?>
<script>


</script>

  



    <section class="step-wizard mt-5">
    <ul class="step-wizard-list">
    <li class="step-wizard-item " id="five">
            <span class="progress-count">1</span>
            <span class="progress-label">Unsuccesful</span>
        </li>
        <li   class="step-wizard-item" id="one">
            <span class="progress-count ">2</span>
            <span class="progress-label">Pending</span>
        </li>
        <li class="step-wizard-item " id="two">
            <span class="progress-count">3</span>
            <span class="progress-label">Shipped</span>
        </li>
        
        <li class="step-wizard-item" id="three">
            <span class="progress-count">4</span>
            <span class="progress-label">Collected</span>
        </li>
        <li class="step-wizard-item" id="four">
            <span class="progress-count">5</span>
            <span class="progress-label">Delivered</span>
        </li>
    </ul>
</section>


    <div class="modal-content mt-5" id="open" >
        <div class="modal-header d-inline-block">
          <h5 class="modal-title" id="exampleModalLabel">Tracking ID: </h5>
          <p class="display-contents">  <?php echo $data['tracking_id']?></p>
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
                    <h4>status </h4>
                  
                  <div>  <h5 id="a" style=" color:  #0d6efd;" class=""><?php echo $data['status_name']?></h5></div>
                          </div>
                      </div>
                  </div>
                  <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal-content" aria-label="Close">close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div> "<script> if(a == 'pending') {
                           document.write('current-item');
          }else{} 
          </script>"
          -->
          <?php# echo  $data['status_name'] == 'pending' 
                    #  echo 'current-item':NULL ?>
                  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
              rel="stylesheet">
          
          
          
                </div>

<?php } else {?>

<h1> Please Enter Details </h1>
<?php } ?>




                <script>
              var a=document.getElementById('a').innerHTML;
             var element= document.getElementById('one')
             var element2= document.getElementById('two')
             var element3= document.getElementById('three')
             var element4= document.getElementById('four')
             var element5= document.getElementById('five')
          
          
                if(a == "Pending" ){
          
                  element.classList.add("current-item");
                }
          
          else if(a == "Shipped" ){
              element2.classList.add("current-item");
          }
          
          else if(a == "Collected" ){
              element3.classList.add("current-item");
          }
          else if(a == "Delivered" ){
              element4.classList.add("current-item");
          }
          else if(a == "unsuccessful" ){
              element5.classList.add("current-item");
          }
          </script>
 
      <?php include('header/footer.php');
?>

<!-- edddddddddddddd -->

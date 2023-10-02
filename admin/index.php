

<?php 
     include('header/header.php');
     
     if((isset($_SESSION['A_ADMIN_NAME']))){ ?>

<?php
            include('header/connection.php');

        $q1="SELECT count(*) as my_pending from booking  where status_id_FK='1'";
        $res1=mysqli_query($con,$q1);
        $data1=mysqli_fetch_assoc($res1);
        
        $q2="SELECT count(*) as my_succes from booking  where status_id_FK='2'";
        $res2=mysqli_query($con,$q2);
        $data2=mysqli_fetch_assoc($res2);

        $q3="SELECT count(*) as my_collected from booking  where status_id_FK='4'";
        $res3=mysqli_query($con,$q3);
        $data3=mysqli_fetch_assoc($res3);

        $q4="SELECT count(*) as my_unsucces from booking  where status_id_FK='5'";
        $res4=mysqli_query($con,$q4);
        $data4=mysqli_fetch_assoc($res4);
        
        $q5="SELECT count(*) as book from booking  ";
        $res5=mysqli_query($con,$q5);
        $data5=mysqli_fetch_assoc($res5);

        $q6="SELECT count(*) as agents from agent ";
        $res6=mysqli_query($con,$q6);
        $data6=mysqli_fetch_assoc($res6);

        $q7="   SELECT count(*) as citys from my_city ";
     
        $res7=mysqli_query($con,$q7);
        $data7=mysqli_fetch_assoc($res7);

        $q8="SELECT count(*) as branches from branch  ";
        $res8=mysqli_query($con,$q8);
        $data8=mysqli_fetch_assoc($res8);

        $q9="SELECT * from contact_table  order by contact_table.contact_id desc ";
        $res9=mysqli_query($con,$q9);
        #$data9=mysqli_fetch_assoc($res9);

        

        if(isset($_POST['to_btn'])){
            $to=$_POST['to'];
 
        $t_a=$_POST['task'];

        $q10="INSERT INTO `to_do_list`( `users_id`, `task`) VALUES ('$to ',' $t_a')";
        $res10=mysqli_query($con,$q10);


        }
       
        $to_show=$_SESSION['A_ADMIN_ID'];
        $q11="SELECT * from to_do_list  where users_id='$to_show'";
        $res11=mysqli_query($con,$q11);


          
        $q12="SELECT *  from booking join parcel_information on booking.booking_id=parcel_information.booking_id_fk  where status_id_fk='2' limit 5 ";
        $res12=mysqli_query($con,$q12);
  
        
?>
             
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pending Booking</p>
                                <h6 class="mb-0"> <?php echo $data1['my_pending']; ?> </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Successful Booking</p>
                                <h6 class="mb-0"><?php echo $data2['my_succes']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Collected Booking</p>
                                <h6 class="mb-0"><?php echo $data3['my_collected']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">unsuccesful Booking</p>
                                <h6 class="mb-0"><?php echo $data4['my_unsucces']; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <!-- 11 -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Booking</p>
                                <h6 class="mb-0"> <?php echo $data5['book']; ?> </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Our Agent</p>
                                <h6 class="mb-0"><?php echo $data6['agents']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> City</p>
                                <h6 class="mb-0"> <?php echo $data7['citys']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Our Branches</p>
                                <h6 class="mb-0"><?php echo $data8['branches']; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sales Chart Start -->
           
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Tracking Number</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <!-- <th scope="col">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($data12=mysqli_fetch_assoc($res12)){ ?>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td><?php echo $data12['date']; ?></td>     
                                    <td><?php echo $data12['tracking_id']; ?></td>                      
                                    <td><?php echo $data12['sender_name']; ?></td>
                                    <td><?php echo $data12['price']; ?></td>
                                    <td>Paid</td>
                                    <!-- <td><a class="btn btn-sm btn-primary" href="">Detail</a></td> -->
                                </tr>
                                <?php } ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4" >
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4" >
                        <div class="h-100 bg-light rounded p-4"  >
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                <a href="contact_table.php">Show All</a>
                            </div>
                            <div class=""   style="overflow-y:scroll;height:300px;">
                                                     <?php while($data9=mysqli_fetch_assoc($res9)){ ?>
<div class="d-flex align-items-center border-bottom py-3">
    <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
    <div class="w-100 ms-3">
    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0"><?php echo $data9['contact_name']; ?></h6>
                               
                                    </div>
                                    <span><?php echo $data9['contact_message']; ?></span>
                                </div>
</div>
<?php } ?> 
                          

                                                     </div>


                      
                          
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                       
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4 "  >
                        <div class="h-100 bg-light rounded p-4" >
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">To Do List</h6>
                     
                            </div>
                          
                                <form action="" method="post">
                                <div class="d-flex mb-2">
                                    <input type="hidden" name="to" value=" <?php echo $_SESSION['A_ADMIN_ID'];?> " id="">
                                <input class="form-control bg-transparent" type="text" name="task" placeholder="Enter task">
                                <button type="submit" name="to_btn" class="btn btn-primary ms-2">Add</button>
                                </div>    
                            </form>
                        
                            <div class="" style="overflow-y:scroll;height:250px;"  >
                            <?php while($data11=mysqli_fetch_assoc($res11)){ ?>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><?php echo $data11['task']; ?></span>
                                     <a href="to_do_delete.php?id=<?php echo $data11['to_do_list_id']; ?>">  <button class="btn btn-sm"><i class="fa fa-times"></i></button></a> 
                                    </div>
                                </div>
                            </div>
                            <?php } ?> 
                            
                            </div>
                        </div>
                    </div>
                </div>
   
         <?php include('header/footer.php') ?>



         <?php  } else { ?>


  <?php
            include('header/connection.php');
            $x=$_SESSION['AGENT_ID'];
            $query4 = "SELECT * FROM  agent JOIN user ON agent.user_id_FK=user.users_id JOIN branch ON
            agent.branch_id_FK=branch.branch_id where user_id_FK='$x'" ;
            $result4 = mysqli_query($con,$query4);
            $data4=mysqli_fetch_assoc($result4);
            
            $a1=$data4['branch_id_FK'];

        $q1="SELECT count(*) as my_pending from booking  where status_id_FK='1' AND pickup_branch_id_fk='$a1'";
        $res1=mysqli_query($con,$q1);
        $data1=mysqli_fetch_assoc($res1);
        
    
        $q2="SELECT count(*) as my_succes from booking  where status_id_FK='2'AND pickup_branch_id_fk='$a1'";
        $res2=mysqli_query($con,$q2);
        $data2=mysqli_fetch_assoc($res2);

        $q3="SELECT count(*) as my_collected from booking  where status_id_FK='4'AND pickup_branch_id_fk='$a1'";
        $res3=mysqli_query($con,$q3);
        $data3=mysqli_fetch_assoc($res3);

        $q4="SELECT count(*) as my_unsucces from booking  where status_id_FK='5' AND pickup_branch_id_fk='$a1'";
        $res4=mysqli_query($con,$q4);
        $data4=mysqli_fetch_assoc($res4);
        
        $q5="SELECT count(*) as book from booking where pickup_branch_id_fk='$a1'" ;
        $res5=mysqli_query($con,$q5);
        $data5=mysqli_fetch_assoc($res5);

        $q6="SELECT count(*) as agents from agent   where user_id_FK='$x'";
        $res6=mysqli_query($con,$q6);
        $data6=mysqli_fetch_assoc($res6);

        $q7="   SELECT count(*) as citys from my_city";
 
        $res7=mysqli_query($con,$q7);
        $data7=mysqli_fetch_assoc($res7);

        $q8="SELECT count(*) as branches from branch  ";
        $res8=mysqli_query($con,$q8);
        $data8=mysqli_fetch_assoc($res8);

        if(isset($_POST['to_btn'])){
            $to=$_POST['to'];
 
        $t_a=$_POST['task'];
    
        $q10="INSERT INTO `to_do_list`( `users_id`, `task`) VALUES ('$to ',' $t_a')";
        $res10=mysqli_query($con,$q10);

        }
        $to_show=$_SESSION['AGENT_ID'];
        $q11="SELECT * from to_do_list  where users_id='$to_show'";
        $res11=mysqli_query($con,$q11);
    
            
    
    
              
           # $q12="SELECT *  from booking join parcel_information on booking.booking_id=parcel_information.booking_id_fk order by booking.booking_id desc limit 5";
           # $res12=mysqli_query($con,$q12);
           # $data12=mysqli_fetch_assoc($res12);

?>
       
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pending Booking</p>
                                <h6 class="mb-0"> <?php echo $data1['my_pending']; ?> </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Successful Booking</p>
                                <h6 class="mb-0"><?php echo $data2['my_succes']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Collected Booking</p>
                                <h6 class="mb-0"><?php echo $data3['my_collected']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">unsuccesful Booking</p>
                                <h6 class="mb-0"><?php echo $data4['my_unsucces']; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <!-- 11 -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Booking</p>
                                <h6 class="mb-0"> <?php echo $data5['book']; ?> </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Our Agent</p>
                                <h6 class="mb-0"><?php echo $data6['agents']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> City</p>
                                <h6 class="mb-0"> <?php echo $data7['citys']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Our Branches</p>
                                <h6 class="mb-0"><?php echo $data8['branches']; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sales Chart Start -->
            
         
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
           
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                           
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-6 "  >
                        <div class="h-100 bg-light rounded p-4" >
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">To Do List</h6>
                             
                            </div>
                          
                            <form action="" method="post">
                                <div class="d-flex mb-2">
                                    <input type="hidden" name="to" value=" <?php echo $_SESSION['AGENT_ID'];?> " id="">
                                <input class="form-control bg-transparent" type="text" name="task" placeholder="Enter task">
                                <button type="submit" name="to_btn" class="btn btn-primary ms-2">Add</button>
                                </div>    
                            </form>
                        
                            <div class="" style="overflow-y:scroll;height:200px;"  >
                            <?php while($data11=mysqli_fetch_assoc($res11)){ ?>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><?php echo $data11['task']; ?></span>
                                     <a href="agent_to_do_delete.php?id=<?php echo $data11['to_do_list_id']; ?>">  <button class="btn btn-sm"><i class="fa fa-times"></i></button></a> 
                                    </div>
                                </div>
                            </div>
                            <?php } ?> 
                            
                            </div>
                        </div>
                    </div>
                </div>
         <?php include('header/footer.php') ?>

  <?php  }?>
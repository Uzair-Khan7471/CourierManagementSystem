<?php
session_start();
if(!(isset($_SESSION['A_ADMIN_NAME']) || isset($_SESSION['AGENT_NAME']))){
  header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<?php

function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$current_page = PageName();

?>
<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

  
    <style>
          .divider:after,
  .divider:before {
  content: "";
  flex: 1;
  height: 1px;
  background: #eee;
  }
  .h-custom {
  height: calc(100% - 73px);
  }
  @media (max-width: 450px) {
  .h-custom {
  height: 100%;
  }
  }
  /* form css */
  .active{
  
    color:  #009CFF;
  

      }
      .active #aro{
        color:#009CFF; 
        padding: 7px 20px;
    color:  #009CFF;
    font-weight: 500;
    border-left: 3px solid  #009CFF;
    background-color:white;
    border-radius: 0 30px 30px 0;
    outline: none;
      }



      .rounded {
    border-radius: 5px !important;
}
.bg-light {
    background-color: #F3F6F9 !important;
}
.p-4 {
    padding: 1.5rem !important;
}
.h-100 {
    height: 100% !important;
}
*, *::before, *::after {
    box-sizing: border-box;
}

div {
    display: block;
}

.form-control:focus {
    box-shadow: none;
    border-color: #0e1d34;
}

/* .btn{
    background-color: #0e1d34;
    color: #fff;
    border: 1px solid #0e1d34;
} */

.labels {
    font-size: 15px
}

.profile{
    background-color: #0e1d34;
}
.bi-pencil-square{
          background-color: #ffff;
          color: #0d6efd;
          border: none;
        }
        .bi-trash-fill{
          background-color: #ffff;
          color: #dc3545;
          border: none;
        }
        .trash:hover{
          background-color:#bb2d3b ;
          color: #fff;
        }
        .pencil:hover{
          background-color:#0d6efd ;
          color: #fff;
        }



    </style>
</head>

<body class="container-fluid">
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <?php  if((isset($_SESSION['A_ADMIN_NAME']))){ ?>
                             
            
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
               <!-- start if here -->
               
 
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                    <a href="profile.php"><img src="<?php echo $_SESSION['A_ADMIN_IMAGE'] ?>" alt="" class="rounded-circle" style="width: 40px; height: 40px;"></a>

                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
        
                        <h6 class="mb-0"><?php echo $_SESSION['A_ADMIN_NAME'] ?></h6>
                        <span>Admin</span>
                        <span></span>
                    </div>
                </div>



  <!--end start if here -->
<div class="navbar-nav w-100">
 
     
          <li class="nav-item <?php echo $current_page == 'index.php' ? 'active  ':NULL ?>" ><a  href="index.php" id="aro" class="nav-item nav-link" > <i class="fa fa-tachometer-alt me-2"></i>Dashboard</a></li>

                    <!-- <a href="index.html" ></a> --> <div class="nav-item dropdown">
              

                    <div class="nav-item dropdown" >
                        <a href="#" class="nav-link  dropdown-toggle"  data-bs-toggle="dropdown"><i class="bi bi-person-circle me-2"></i>   <span href="javascript:;" class=" <?php echo $current_page == 'role_form.php' || $current_page == 'role_table.php'|| $current_page == 'user_form.php'|| $current_page == 'user_table.php'? 'active':NULL?>" > Role </span></a>
                        <div class="dropdown-menu bg-transparent border-0" >
                            <a href="role_form.php"  class="dropdown-item">Add Role</a>
                            <a href="role_table.php" class="dropdown-item">Show Role</a>
                            <a href="user_form.php" class="dropdown-item">Add User</a>
                            <a href="user_table.php" class="dropdown-item">Show User</a>
                        </div>
                    </div>
                

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-building  me-2"></i> <span href="javascript:;" class=" <?php echo $current_page == 'branch_form.php' || $current_page == 'branch_table.php'|| $current_page == 'city_form.php' || $current_page == 'city_table.php'? 'active':NULL?>"> Branch </span></a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="city_form.php" class="dropdown-item">Add City</a>
                            <a href="city_table.php" class="dropdown-item">Show City</a>
                            <a href="branch_form.php" class="dropdown-item">Add Branch</a>
                            <a href="branch_table.php" class="dropdown-item">Show Branch</a>
                         
                        </div>
                    </div>
                        

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i> <span href="javascript:;" class=" <?php echo $current_page == 'agent_form.php' || $current_page == 'agent_table.php'? 'active':NULL?>"> Agent </span></a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="agent_form.php" class="dropdown-item">Add Agent</a>
                            <a href="agent_table.php" class="dropdown-item">Show Agent</a>

                        </div>
                    </div>

                
                
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-box-seam me-2 fs-4"></i><span href="javascript:;" class=" <?php echo $current_page == 'show_courier.php' || $current_page == 'collected_courier.php' || $current_page == 'shipped_courier.php' || $current_page == 'delievered_courier.php' || $current_page == 'undelievered_courier.php'? 'active':NULL?>"> Courier </span></a>
                        <div class="dropdown-menu bg-transparent border-0">
                      
                            <a href="show_courier.php" class="dropdown-item">View Courier</a>
                            <a href="pending_courier.php" class="dropdown-item">pending courier</a>
                            <a href="collected_courier.php" class="dropdown-item">Collected Item</a>
                            <a href="shipped_courier.php" class="dropdown-item">Shipped Item</a>
                            <a href="delievered_courier.php" class="dropdown-item">Successfully Delivered</a>
                            <a href="undelievered_courier.php" class="dropdown-item">Unsuccessfully Delivered</a>
                            <!-- <a href="picked_courier.php" class="dropdown-item">Picked-Up Item</a> -->
                          
                        
                        </div>
                    </div>
                
                         
          <li class="nav-item <?php echo $current_page == 'track_parcel.php' ? 'active  ':NULL ?>" ><a  href="track_parcel.php" id="aro" class="nav-item nav-link" > <i class="bi bi-search me-2 fs-4"></i>Track Parcels</a></li>
            
                </div>
                
                <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-box me-2 fs-4"></i>Type</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="type_form.php" class="dropdown-item">Add Type</a>
                        <a href="type_table.php" class="dropdown-item">View Type</a>
                        </div>
                    </div>
                 
                    <li class="nav-item <?php echo $current_page == 'contact_table.php' ? 'active  ':NULL ?>" ><a  href="contact_table.php" id="aro" class="nav-item nav-link" > <i class="fa fa-tachometer-alt me-2"></i>Contact</a></li>
                </div>
             
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form> -->
                <div class="navbar-nav align-items-center ms-auto">
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div> -->
                  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?php echo $_SESSION['A_ADMIN_IMAGE'] ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['A_ADMIN_NAME'] ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="passward_change.php?id=<?php echo $_SESSION['A_ADMIN_ID'] ?>" class="dropdown-item">Password Change</a>
                            <a href="profile.php" class="dropdown-item">Update Profile</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
      
        
        <?php  } else { ?>

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
               <!-- start if here -->
               
 
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                    <a href="profile.php"><img src="<?php echo $_SESSION['AGENT_IMAGE'] ?>" alt="" class="rounded-circle" style="width: 40px; height: 40px;"></a>

                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
        
                        <h6 class="mb-0"><?php echo $_SESSION['AGENT_NAME'] ?></h6>
                        <span>Agent</span>
                        <span></span>
                    </div>
                </div>



  <!--end start if here -->
<div class="navbar-nav w-100">
 
      
          <li class="nav-item <?php echo $current_page == 'index.php' ? 'active  ':NULL ?>" ><a  href="index.php" id="aro" class="nav-item nav-link" > <i class="fa fa-tachometer-alt me-2"></i>Dashboard</a></li>

                    <!-- <a href="index.html" ></a> --> <div class="nav-item dropdown">
              

            
          
              
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-building  me-2"></i> <span href="javascript:;" class=" <?php echo $current_page == 'branch_form.php' || $current_page == 'branch_table.php'|| $current_page == 'city_form.php' || $current_page == 'city_table.php'? 'active':NULL?>"> Branch </span></a>
                        <div class="dropdown-menu bg-transparent border-0">
                          
                            <a href="branch_table.php" class="dropdown-item">Show Branch</a>
                     
                        </div>
                    </div>
              

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i> <span href="javascript:;" class=" <?php echo $current_page == 'agent_form.php' || $current_page == 'agent_table.php'? 'active':NULL?>"> Agent </span></a>
                        <div class="dropdown-menu bg-transparent border-0">
                     
                            <a href="agent_table.php" class="dropdown-item">Show Agent</a>

                        </div>
                    </div>
                
            
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-box-seam me-2 fs-4"></i><span href="javascript:;" class=" <?php echo $current_page == 'show_courier.php' || $current_page == 'collected_courier.php' || $current_page == 'shipped_courier.php' || $current_page == 'delievered_courier.php' || $current_page == 'undelievered_courier.php'? 'active':NULL?>"> Courier </span></a>
                        <div class="dropdown-menu bg-transparent border-0">
                
                            <a href="show_courier.php" class="dropdown-item">View Courier</a>
                            <a href="pending_courier.php" class="dropdown-item">pending courier</a>
                            <a href="collected_courier.php" class="dropdown-item">Collected Item</a>
                            <a href="shipped_courier.php" class="dropdown-item">Shipped Item</a>
                            <a href="delievered_courier.php" class="dropdown-item">Successfully Delivered</a>
                            <a href="undelievered_courier.php" class="dropdown-item">Unsuccessfully Delivered</a>
                            <!-- <a href="picked_courier.php" class="dropdown-item">Picked-Up Item</a> -->
                        </div>
                    </div>
                 
                    <li class="nav-item <?php echo $current_page == 'track_parcel.php' ? 'active  ':NULL ?>" ><a  href="track_parcel.php" id="aro" class="nav-item nav-link" > <i class="bi bi-search me-2 fs-4"></i>Track Parcels</a></li>
                </div>
                
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form> -->
                <div class="navbar-nav align-items-center ms-auto">
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div> -->
                    <!-- notification -->
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?php echo $_SESSION['AGENT_IMAGE'] ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['AGENT_NAME'] ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="passward_change.php?id=<?php echo $_SESSION['AGENT_ID'] ?>" class="dropdown-item">Password Change</a>
                            <a href="profile.php" class="dropdown-item">Update Profile</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
      
            <?php } ?>

         
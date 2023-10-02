<?php
include('header.php');
include('admin/header/connection.php');
$q1="SELECT * from my_city  ";
$res1=mysqli_query($con,$q1);
$data1=mysqli_fetch_assoc($res1);;
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Zeptar Cities</h2>
              <p>Manage orders, automate shipping with rules, organize packing with pick lists and packing slips, track shipments, and notify recipients — in one easy-to-use platform.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container text-align-center">
          <ol class="justify-content-center">
            <li><a href="index.php">Home</a></li>
            <li><a href="cities.php">Zeptar Cities</a></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <!-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <p>
            Zeptar is an end to end COD (Cash On Delivery) logistics company that offers its utmost dedicated service for the ever-growing E-commerce industry.
It does not only believe in handling the high velocity of shipments on daily basis but also helps you accelerate your online business by providing you with very flexible service. Zeptar promises the fastest possible delivery all across Pakistan with the quickest possible transfer of funds and effective customer service too.
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Voluptatem et qui exercitationem</h5>
                  <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>End About Us Section -->


    <!-- ======= Our Team Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-5">
          <h2>Cities where Zeptar is located.</h2>

        </div>

<div class="row gy-4">

                   



<?php while($data1=mysqli_fetch_assoc($res1)){ ?>

  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
  <a href="branches.php?id=<?php echo $data1['id'];?>">
<div class="card">
<div class="card-img">
 <img src="assets/img/ZEPTAR.png" alt="" class="img-fluid">
</div>
<h3><?php echo $data1['city_name']; ?></h3>
<p></p>            </div>
</a>
</div><!-- End Card Item -->

  <?php } ?>


        </div>


      </div>
      </div>
    </section>

  

  </main><!-- End #main -->

<?php
include('footer.php')
?>


                   

 
<?php include('header.php');
    include('admin/header/connection.php');

    $q6="SELECT count(*) as my_order from booking  ";
    $res6=mysqli_query($con,$q6);
    $data6=mysqli_fetch_assoc($res6);

$q1="SELECT count(*) as my_client from booking  where status_id_FK='2'";
$res1=mysqli_query($con,$q1);
$data1=mysqli_fetch_assoc($res1);

$q4="SELECT count(*) as my_agent from branch ";
$res4=mysqli_query($con,$q4);
$data4=mysqli_fetch_assoc($res4);

$q5="SELECT count(*) as my_city from my_city  ";
$res5=mysqli_query($con,$q5);
$data5=mysqli_fetch_assoc($res5);
?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Your Lightning Fast Delivery Partner</h2>
          <p data-aos="fade-up" data-aos-delay="100">Facere distinctio molestiae nisi fugit tenetur repellat non praesentium nesciunt optio quis sit odio nemo quisquam. eius quos reiciendis eum vel eum voluptatem eum maiores eaque id optio ullam occaecati odio est possimus vel reprehenderit</p>

          <form action="track.php" method="POST" class="d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" name="tracking_number" placeholder="Enter Tracking ID">
            <button type="submit" name="btn" class="btn btn-primary">Search</button>
          </form>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $data1['my_client']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Succesful Delivery</p>
              </div>
            </div><!-- End Stats Item -->
           
            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $data5['my_city']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Total City</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $data6['my_order']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Our Total Orders</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $data4['my_agent']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Our Branches</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">



    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-5">
          <span>Our Services</span>
          <h2>Our Services</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/storage.png" alt="" class="img-fluid">
              </div>
              <h3>Storage</h3>
<p>Storage is the activity of storing products at warehouses and logistics centers. Its role is to provide a steady supply of goods to the market to fill the temporal gap between producers and consumers. It also plays an important role in maintaining quality at warehouses and logistics centers and value of products.</p>            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/logistics.png" alt="" class="img-fluid">
              </div>
              <h3>Logistics</h3>
              <p>The basic difference between courier and logistics starts with the amount and size of the goods transported. Courier services generally do not involve delivering bigger products from one place to another. Logistics services are employed whenever there is a need to deliver bigger products that are many.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/cargo (1).png" alt="" class="img-fluid">
              </div>
              <h3>Cargo</h3>
              <p>In simple terms, tracking a package or courier involves the process of localizing packages and containers, and different parcels at the time of sorting and delivery. This helps to verify their movement and source, and have an estimate of the final delivery.</p>
            </div>
          </div><!-- End Card Item -->


          <div class="col-2"></div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/pack.png" alt="" class="img-fluid">
              </div>
              <h3>Packaging</h3>
              <p>Courier bags also known as poly mailers or courier satchels are a co extruded LDPE material. This essentially means it has two layers of LDPE molded together, black on the inside and white on the outside.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/warehouse.png" alt="" class="img-fluid">
              </div>
              <h3>Warehousing</h3>
              <p>After products have been received and processed, they need to be stored. This can involve putting the products in bins and pallets and then using moving equipment to transport them to their appropriate storage space</p>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action" style="">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>ZEPTAR.</h3>
            <p> Packages and pallets, big and small, we can offer you an instant quote for your shipping needs both domestically and internationally. Fill out your shipment details below to discover your quotes. If you are satisfied, simply continue to book.</p>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

    

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/R.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Best transport and shipping services</h3>
            <p>
            We pride ourselves on providing the best transport and shipping services globally through an integrated network of 750+ courier centers in Pakistan handling more than 2 Million shipments annually. Our services combine the merits of skilled personnel, innovative technological solutions, and decades of experience in integrated supply chain management to ensure that you receive the best experience possible.
            </p>
          </div>
        </div><!-- Features Item -->




        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/OIP.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>24/7 Hours Delivery Support</h3>
            <p>
            Call us anytime on your 24/7 courier services.   Are you looking for a specific food that does not deliver?  Or in need of a grocery delivered at 3 in the morning?  Therefore, no worries, just call us and we’ll deliver it for you.  We’ll respond fast to all or any of your inquiries.  In any case, we are just a phone call, message, or online booking away.  Feel free to call us anytime to book your 24/7 courier services.  Furthermore, there is a reason our 24/7 courier services are open.  Indeed make use of it.  Besides, we are reliable and trustworthy 24/7 courier services. 
            </p>
          </div>
        </div><!-- Features Item -->

      </div>
    </section><!-- End Features Section -->






  </main><!-- End #main -->
  <?php include('footer.php')?>
 

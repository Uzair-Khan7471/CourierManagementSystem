<?php
include('header.php');





?>
<style>
  .form-group p{
    color:red;
  }
</style>
<?php
include('admin/header/connection.php');
$q="SELECT * FROM user where roll_id_fk='1'";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);
?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Contact</h2>
              <p>ZEPTAR Sentiments continues to strengthen relationships and spread happiness by allowing people to send gifts, cakes and flowers to Pakistan..</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container justify-content-center">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div>
          <iframe style="border:0; width: 100%; height: 340px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4 mt-4">

          <div class="col-lg-4">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p><?php echo $data['user_email']?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p><?php echo $data['user_contact']?></p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-8">
            <h3 class="column-title">We love to hear</h3>
            <form id="contact-form" action="contact_insert.php" method="post" role="form">
              <div class="error-container"></div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control form-control-name" required pattern="[A-Za-z]{3,}" title="Minimun Three letter  without Number" name="name" id="name" onchange="firstname()"
                      placeholder="" type="text" required>
                    <p id="p1"></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control form-control-email" name="email" onchange="eemail()" id="email"
                      placeholder="" type="email" required pattern="^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$" title="Email Address Is Invalid .Please  Enter Correct Email Address">
                    <p id="p2"></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Subject</label>
                    <input class="form-control form-control-subject" name="subject" required pattern="^[a-zA-Z\s]{5,}$" title="Please Subject consist of minimum 5 albhabet "onchange="subjects()"
                      id="subject" placeholder="" required>
                    <p id="p3"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control form-control-message" name="message" onchange="messages()" id="message"
                  placeholder="" rows="10" required></textarea>
                <p id="p4"></p>
              </div>
              <div class="text-right"><br>
                <button class="btn btn-primary solid blank" name="btn" type="submit" >Send Message</button>
              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <script>

      function firstname() {
        var first = document.getElementById("name").value;
        var testing_reg = /^[a-zA-Z\s]{3,}$/

        if (first == "") {
          document.getElementById("p1").innerHTML = "*Please Enter Your first Name*";
        }
        else if (testing_reg.test(first) != true) {
          document.getElementById("p1").innerHTML = "*Please name consist of minimum three albhabet";
        }
        else {
          document.getElementById("p1").innerHTML = "";
          name = true;
        }
      }
      function eemail() {
        var first = document.getElementById("email").value;
        var testing_reg = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/

        if (first == "") {
          document.getElementById("p2").innerHTML = "*Please Enter Your Email*";
        }
        else if (testing_reg.test(first) != true) {
          document.getElementById("p2").innerHTML = "*Please Email consist of alphabets and @ plus domain..";
        }
        else {
          document.getElementById("p2").innerHTML = "";
          mail = true;
        }
      }
      function subjects() {
        var first = document.getElementById("subject").value;
        var testing_reg = /^[a-zA-Z\s]{5,}$/

        if (first == "") {
          document.getElementById("p3").innerHTML = "*Please Enter Your Message*";
        }
        else if (testing_reg.test(first) != true) {
          document.getElementById("p3").innerHTML = "*Please Subject consist of minimum 5 albhabet";
        }
        else {
          document.getElementById("p3").innerHTML = "";
          sub = true;
        }
      }
      







    </script>

  <!-- ======= Footer ======= -->
  <?php
include('footer.php')
?>
   
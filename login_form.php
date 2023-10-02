


<?php
include('header.php')
?>
    
<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
.page-header::before{
    content: "";
    background-color: rgba(14, 29, 52, 0.8);
    position: absolute;
    inset: 0;
    height: 300px;
}
.page-header{
    background-image: url('assets/img/cta-bg.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 300px;
}

.wrapper input::placeholder{
  font-size: 17px;
}
.wrapper span{
  position: absolute;
  right: 15px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
  color: #8e44ad;
  cursor: pointer;
  display: none;
}
.wrapper input:valid ~ span{
  display: block;
}
.wrapper span i.hide-btn::before{
  content: "\f070";
}

</style>
  <!-- Section: Design Block -->
  <section class="text-center d-inline">
  <!-- Background image -->
  <div class="p-5 bg-image page-header"></div>
  <!-- Background image -->

  <div class="card shadow-5-strong mb-5 mx-auto w-50" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5 ">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign In</h2>
          <form method="post" action="login.php">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            

            <!-- Email input -->
            <div class="form-floating mb-4">
              <input type="text"
               id="formId1" name="uu" class="form-control" placeholder="Enter Your User Name"/>
              <label  for="formId1">Enter Your User Name</label>
            </div>

            <!-- Password input -->
            <div class="form-floating mb-4 wrapper">
            <input type="password" id="o"  name="pp" class="form-control" placeholder="Enter Your Password" required>
      <span class="show-btn" id="p"><i class="fas fa-eye"></i></span>
              <!-- <input type="password"
               id="formId1" name="pp" class="form-control" placeholder="Enter Your Password"/>
               <span class="show-btn"><i class="fas fa-eye"></i></span> -->
               <label  for="formId1">Enter Your Password</label>
        
            </div>



            <!-- Submit button -->
            <button type="submit" name="btn" class="btn btn-primary btn-block mb-4">
              Sign In
</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

    <script>
      const passField = document.getElementById('o');
      const showBtn = document.querySelector("span i");
      showBtn.onclick = (()=>{
        if(passField.type === "password"){
          passField.type = "text";
          showBtn.classList.add("hide-btn");
        }else{
          passField.type = "password";
          showBtn.classList.remove("hide-btn");
        }
      });
    </script>
<!-- Section: Design Block -->
<?php
include('footer.php')
?>

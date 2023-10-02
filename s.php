<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <!---- <title>Password Show or Hide Toggle | CodeLab</title>----->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

.wrapper{
  position: relative;
  height: 55px;
  width: 320px;
  border-radius: 5px;
  box-shadow: 0px 3px 3px rgba(0,0,0,0.1);
}
.wrapper input{
  width: 100%;
  height: 100%;
  border: 1px solid #8e44ad;
  padding-left: 15px;
  font-size: 18px;
  outline: none;
  border-radius: 5px;
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
  <body>
    <div class="wrapper">
      <input type="password" placeholder="Enter Password" required>
      <span class="show-btn"><i class="fas fa-eye"></i></span>
    </div>
    <script>
      const passField = document.querySelector("input");
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

  </body>
</html>


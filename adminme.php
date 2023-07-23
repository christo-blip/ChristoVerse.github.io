<!doctype html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="css/mystyle.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">

<style>
  .footer1{
/* background:#000; */
background-color:#ffc94b;
padding:30px 0px;
font-family: 'Play', sans-serif;
text-align:center;
}

.footer1 .row{
width:100%;
margin:1% 0%;
padding:0.6% 0%;
color:gray;
font-size:0.8em;
}

.footer1 .row a{
text-decoration:none;
color:gray;
transition:0.5s;
}

.footer1 .row a:hover{
color:#fff;
}

.footer1 .row ul{
width:100%;
}

.footer1 .row ul li{
display:inline;
margin:0px 30px;
}

.footer1 .row a i{
font-size:2em;

margin:0% 1%;
}

@media (max-width:720px){
.footer1{
text-align:left;
padding:5%;
}
.footer1 .row ul li{
display:block;
margin:10px 0px;
text-align:left;
}
.footer1 .row a i{
margin:0% 3%;
}
}
  
* {
  margin: 0;
  padding: 0;
  /* overflow:hidden; */
  }

  /* footer{
    position:relative;
    display:flex;
    justify-content:center;
    align-items:center;
    width:100%;
    background-color:#f6fa0a;
    height:190px;
    padding: 20px 50px;
    flex-direction: column;

}
footer .social-icons, footer .menu{
position:relative;
display:flex;
justify-content: center;
align-items: center;
margin: 10px 0;
flex-wrap: wrap;    

}
 footer .social-icons li,footer .menu li{
    list-style: none;

 }
  footer .social-icons li a{
    font-size: 2em;
    color: black;
    margin: 0 10px;
    display: inline-block;
    transition:0.5s;
  }
  footer .social-icons li a:hover{
    transform: translateY(-10px);
  }
  footer .menu li a{
    font-size: 1.2em;
    color: #141414;
    margin: 0 10px;
    display: inline-block;
    text-decoration: none;
    opacity: 0.75;
    transition: 0.5s;
  }
  footer .menu li a:HOVER{
    opatcity:1;
    
  }
  footer .wave{
    position: absolute;
    top: -100px;
    left: 0;
    width:100%;
    height:100px;
    background-size: 1000px 100px;
  }
  footer .wave#wave1{
    z-index: 1000;
    opacity: 1;
    bottom: 0;
    animation: animateWave 4s linear infinite;
  }
  footer .wave#wave2{
    z-index: 999;
    opacity: 1;
    bottom: 0;
    animation: animateWave-0s 4s linear infinite;
  }
  footer .wave#wave3{
    z-index: 1000;
    opacity: 0.2;
    bottom: 15px;
    animation: animateWave-02 3s linear infinite;
  }  
  footer .wave#wave4{
    z-index: 999;
    opacity: 0.7;
    bottom: 20px;
    animation: animateWave-02 3s linear infinite;
  }
@keyframes animateWave {
  0%{background-position-x:1000px;
  }
  100%{
    background-position-x:0px;
  }

}
@keyframes animateWave-02 {
  0%{background-position-x: 0px;
  }
  100%{
    background-position-x: 1000px;
  }
  
} */

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");



.footer {
  position: relative;
  width: 100%;
  background: #3586ff;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -70px;
  left: 0;
  width: 100%;
  height: 100px;
   background: url("https://i.ibb.co/wQZVxxk/wave.png"); 
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

  </style>
</head>
<body style="background-color:#f9faf4;">
  <header class="title">
    <div class="heading"><h3 class="text-center">This portfolio belongs to<br> Christopher Arulraj T</h3></div>
    
    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  <!-------------------------------------------Icon Start-------------------------------------------->
  <div style="width:15%; height:15%;">
	<!-- <a href="" class="navbar-brand" style="color:#4a6163;">
	<i class="bi bi-facebook"></i>
  </a>
  <a href="" class="navbar-brand" style="color:#4a6163;">
	<i class="bi bi-instagram"></i>
  </a>

  <a href="" class="navbar-brand" style="color:#4a6163;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
</svg>
  </a> -->
	</div>
  <!-------------------------------------------Icon End--------------------------------------------> 
  <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
	aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="color:#4a6163;">
      <ul class="navbar-nav" id="menue">
        <li class="nav-item">
          <a href="index.html" class="nav-link active">Home</a>
        </li>
        <li class="nav-item">
          <a href="authorcol.html" class="nav-link">Author collection</a>
        </li>
        <li class="nav-item">
          <a href="categories.html" class="nav-link">categories</a>
        </li>
        <li class="nav-item">
          <a href="aboutus.html" class="nav-link">About us</a>
        </li>
        <li class="nav-item">
          <a href="aboutus.html" class="nav-link">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->
</header>
<!--------------------------------------------------------------------------------------------------------------------->
<br>
<!------------------------------------------------------------------------------------------------------------------>
<div class="container">
<div class="row" style="border:1px solid green;">
    <div class="col-md-4" style="border:1px solid green;margin-left:auto;margin-right:auto;padding:5%;">
<form action="home.php" onsubmit="" autocomplete="off">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="userName" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="passWord" id="exampleInputPassword">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck" onclick="showpassword()" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="button" class="btn btn-primary" onclick="loginPage(this.form)">Submit</button>
<input type="reset" class="btn btn-primary">
  <button type="submit" class="btn btn-primary"><a href="index.php" style="text-decoration:none;color:white">Back</a></button>
</form>
</div>
</div>
</div>
<footer>
<div class="footer1">
<div class="row">
 <div class="col-3"> 
<a href="#"><i class="fa fa-facebook"></i></a>
    </div>
    <div class="col-3">
<a href="#"><i class="fa fa-instagram"></i></a>
</div>
<div class="col-3">
<a href="#"><i class="fa fa-pinterest"></i></a>
</div>   
<div class="col-3">
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
</div>

<div class="row">
<ul>
<li><a href="#">Contact us</a></li>
<li><a href="#">Our Services</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Career</a></li>
</ul>
</div>

<div class="row" style="margin:50px">
CARTOONCARNIVAL Copyright © 2021  - All rights reserved || Designed By: Christopher Arularj 
</div>
</div>
</footer>

<footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
        </ul>
    <ul class="menu">


    <!-- <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li> -->

    </ul>
    <!-- <p>&copy;2021 Chirstopher | All Rights Reserved</p> -->
  </footer>




</body>
<script type="text/javascript">
  var adminPassword=document.getElementById("exampleInputPassword")
  var checkPassword=document.getElementById("exampleCheck")
  function showpassword(){
    if(checkPassword.checked)
    {adminPassword.setAttribute("type","text")}
    else
    {adminPassword.setAttribute("type","password")}
  }
  function loginPage(form) {
if (form.userName.value=="christo") { 
if (form.passWord.value=="12345pool1#") {              
location="UploadImg/index.php"
} else {
alert("Incorrect detail Password")
}
} else {  alert("Incorrect detail Username")
}
}
</script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
</body>
</html>
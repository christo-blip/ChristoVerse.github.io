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
<!-- <script src="https://kit.fontawesome.com/a2c653daa5.js" crossorigin="anonymous"></script> -->
<style>
 *{
  margin:0px;
  padding:0px;
} 
:root {
    --color-1: #186cb8;
    --color-2: #2a9a9f;
    --color-3: #f98d00;
    --color-4: #e83611;
    --color-5: #f1b211;
  }
  /* html{
height: 100vh;
}

body{
    width: 100%;
    height: 100vh;
    background-color: #ffffff;
    /* font-family: gothambook; */
     /* position: fixed;  */
    /* top: 0; 
    bottom: 0;
    }  */
    
    body{
   width: 100vw;
   min-height: 100vh;
   overflow-X: hidden;
  
}
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
  
  <!-------------------------------------------Icon End--------------------------------------------> 
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
	aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="color:#4a6163;">
      <ul class="navbar-nav" id="menue">
        <li class="nav-item">
          <a href="#home"  class="nav-link active">Home</a>
        </li>
        <li class="nav-item">
          <a href="#project" class="nav-link">Projects</a>
        </li>
        <li class="nav-item">
          <a href="#aboutUs" class="nav-link">About us</a>
        </li>
        <li class="nav-item">
          <a href="#adminPanel" class="nav-link">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<!----------------------------------------------------------------------------------------------------------->
<br>
<section id="home">
  <div class="container" style="">
  <div class="row" style="">
<div class="col-md-6" style="">
<center>
<img src="images/myimage.png" width="75%" 
style="

background-image:url(images/myimagebg.jpg);
background-position:center center;
border-radius:250px;
margin-top:50px;
box-shadow: 10px 10px 100px #c2dc83;
margin-left:auto;"
></center>
</div>
<div class="col-md-6">
<div style="margin-top:40px;">
<h5 style="color:#FFB067;font-family:comic sans ms
;">
INTRODUCTION</h5>
<br>
<br>
<h4 style="font-family:comic sans ms;
-webkit-text-color:#4a6163;-webkit-text-stroke-color:#B7C8C2;
-webkit-text-stroke-width:1px;">
Full Stack Web Developer<br>
<font size="4">(Angular,Python/Django,Php)</font><br>
Web Desginer<br>
<font size="4">(Wordpress)</font></h4>
<br>
<h1 style="font-family:comic sans ms; -webkit-text-color:#4a6163;-webkit-text-stroke-color:#B7C8C2;
-webkit-text-stroke-width:2px;">
Bring your<br> 
brand to life<br> 
with our<br> 
help</h1>
<br>
<p>
<a href="https://www.linkedin.com/in/christopher-arulraj-t-b697851bb" target="_new" style="font-family:comic sans ms;color:#FFB067;">LINKED IN</a> | 
<a href="https://github.com/christo-blip/" target="_new" style="font-family:comic sans ms;color:#FFB067;">GITHUB</a> | 
<a href="https://www.instagram.com/thefted_h_e_a_r_t/" target="_new" style="font-family:comic sans ms;color:#FFB067;">INSTAGRAM</a> | 
<a href="#formbox"  style="font-family:comic sans ms;color:#FFB067;">MESSAGE ME</a>
</p>
<br>
<p style="font-family:comic sans ms">
<a href="#storybox"  style="font-family:comic sans ms;color:#FFB067;">
My story
<i class="bi bi-chevron-double-down"></i>
</a>
</p> 
</div>
</div>  

</div>
  </div>
</section>
<!----------------------------------------------------------------------------------------------------------->
<hr>
<section>
  
<table class="table table-striped" style="background-color:#d69b67;
    color:#4a6163;
    font-family:comic sans ms;width:100%">
    <th style="color:#4a6163">Institute</th>
    <th style="color:#4a6163">Education</th>
    <th style="color:#4a6163">Passed out</th>
    <th style="color:#4a6163">Location</th>
    <tr>
    <td>PSNA</td>
    <td>B.E(ECE)</td>
    <td>2019</td>
    <td>Dindigul</td>
    </tr>
    <tr>
    <td style="color:#4a6163">Vidya Vikash</td>
    <td style="color:#4a6163">HSC</td>
    <td style="color:#4a6163">2015</td>
    <td style="color:#4a6163">Tiruchengode</td>
    </tr>
    <tr>
    <td>Mary Matha</td>
    <td>SSLC</td>
    <td>2012</td>
    <td>Theni</td>
    </tr>  
</table>

</section>
<!------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------->
<section>
<div class="container"  style="padding:5%">
<div>
  

<div class="row" style="font-family:comic sans ms" id="storybox">
    <div class="col-md-3" style="line-height: .5;
  display: grid;
  
  ">
    <div style="background-color: #e1e1e1;;
    color: transparent;
    /* text-shadow: 0px 0px 0px #7474748c; */
    font-family: sans-serif;
    font-size: 5vW;
    text-align:right;
    font-weight: 100;
    font-family:comic sans ms;
    width: min-content; 
    margin: auto;
    text-transform: uppercase;
    background: linear-gradient(
      220deg, var(--color-1) 19%,
      transparent 19%, transparent 20%,
      var(--color-2) 20%, var(--color-2) 39%,
      transparent 39%, transparent 40%,
      var(--color-3) 40%, var(--color-3) 59%,
      transparent 59%,transparent 60%,
      var(--color-4) 60%, var(--color-4) 79%,
      transparent 79%, transparent 80%, 
      var(--color-5) 80%
    );
    -webkit-background-clip: text;">  
    <p style=""><font size="4">who am i</font></p>
      <h6 style=""><font size="7"><s style="width:40px;">HELLO</s></font></h6>
  </div>
  
    </div>
    <div class="col-md-3" >
    <br>
  </div>
  <div class="col-md-3" >
    <br>
  </div>


    <div class="col-md-3">
    <p>
    <font size="7" color="#BDC3CB"><i class="bi bi-caret-left-fill"></i></font>
    <font size="7" color="#BDC3CB"><i class="bi bi-caret-left-fill"></i></font>
    <font size="7" color="#BDC3CB"><i class="bi bi-caret-left-fill"></i></font>
    <font size="7" color="#BDC3CB"><i class="bi bi-caret-left-fill"></i></font>
    <font size="7" color="#BDC3CB"><i class="bi bi-caret-left-fill"></i></font>
    <font size="7" color="#BDC3CB"><i class="bi bi-caret-left-fill"></i></font>
    <font size="7" color="#BDC3CB"><i class="bi bi-caret-left-fill"></i></font>
    <font size="7" color="#BDC3CB"><i class="bi bi-caret-left-fill"></i></font>
  </p>
  </div>




</div>
</div>
<!---------------------------------Multi color text End---------------------------------------------------------->
<!------------------------------- Four box start--------------------------------------------->
  <div class="row">
    
    <div class="col-md-4">
      
      <p 
      
      style="   
      box-shadow: 20px 20px 50px rgba(0,0,0,0.5);
        border-radius:15px;
        border-top:1px solid rgba(255,255,255,0.5);
        border-left:1px solid rgba(255,255,255,0.5);
        backdrop-filter: blur(5px);
        font-size:16px;
        padding:6px;
        font-family:comic sans ms;
        width:75%;
        margin-top:10px;margin-left:auto;
        margin-right:auto;
        line-height:26px;
        text-align:justify;
        text-indent:10px;
        color:#4a6163;
        hover:background-color:black;
        ">
      <b>T</b>he path I chose gave me many struggles but I never give up. 
<b>I</b> will run to reach my destination. 
 <b>D</b>uring my college time, I thought that college studies are easy, and can
manage it. <b>W</b>ith this mindset, I started my college life in an ECE department. 
<b>1</b>st year I had 3 arrears then increased with this I use to bunk
my class goes to tour roaming in the college attending birthday parties all,
</p>
      
    </div>
   
    <div class="col-md-4" style="">
      
      <p style="   
      box-shadow: 20px 20px 50px rgba(0,0,0,0.5);
        border-radius:15px;
        border-top:1px solid rgba(255,255,255,0.5);
        border-left:1px solid rgba(255,255,255,0.5);
        backdrop-filter: blur(5px);
        font-size:16px;
        padding:7px;
        font-family:comic sans ms;
        width:75%;
        margin-top:10px;margin-left:auto;
        margin-right:auto;
        line-height:26px;
        text-align:justify;
        text-indent:10px;
        color:#4a6163;
        hover:background-color:black;
        ">
      But in my mind there is thought that I will clear all the arrears, please don't
give up you will be something to the people. 

      <b>F</b>our years have gone by since I came out of college with arrears. 
<b>A</b>t that time corona also came in the 
period of 2020 Jan to 2021.

<b>I</b>n my home, my parent scolded me very much. 
<b>I</b>n the year 2021 August, I have cleared my arrears, after 20019
</p>
  
    </div>
    <div class="col-md-4">
            
      <p style="   
      box-shadow: 20px 20px 50px rgba(0,0,0,0.5);
        border-radius:16px;
        border-top:1px solid rgba(255,255,255,0.5);
        border-left:1px solid rgba(255,255,255,0.5);
        backdrop-filter: blur(5px);
        font-size:16px;
        padding:10px;
        font-family:comic sans ms;
        width:75%;
        margin-top:10px;margin-left:auto;
        margin-right:auto;
        line-height:26px;
        text-align:justify;
        text-indent:10px;
        color:#4a6163;
        hover:background-color:black;
        ">
      I have studied web development also in CSC institute I got a good mentor who 
help me to gain knowledge in web development.
      
<b>I</b> have joined an Oye desi startup company in Bangalore as a software and 
back-end associate for more than 2 months I have not got the salary up to now.
<b>I</b> will run still to reach my designation now i realize that life won't be easy

    </p>
      
    </div>
  
</div>
</div>
</section>
<!--------------------------------------------------Four box End--------------------------------------------------------->
<!--------------------------------------------------Project Start--------------------------------------------------------->
<article id="project">
  <div class='row' style="">
      
  <div class='col-12' style="">
  <div class="container text-center alert alert" style="background-color:#f9a66c;font-family:comic sans ms;color:#4a6163;">  
  <font size="4">I'm an Indian based Full Stack Web developer focused on crafting clean & 
    user-firendly experiences,<br> I am passionate about building excellent 
    Website that imporves the lives of those around me.</font>
<span style="background-color:White !important">Check My Projects</span>
<svg xmlns="http://www.w3.org/2000/svg" style="bottom:30px;" width="50" height="50" fill="#74BDCB" class="bi bi-hypnotize" viewBox="0 0 16 16">
  <path d="m7.949 7.998.006-.003.003.009-.01-.006Zm.025-.028v-.03l.018.01-.018.02Zm0 .015.04-.022.01.006v.04l-.029.016-.021-.012v-.028Zm.049.057v-.014l-.008.01.008.004Zm-.05-.008h.006l-.006.004v-.004Z"/>
  <path fill-rule="evenodd" d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM4.965 1.69a6.972 6.972 0 0 1 3.861-.642c.722.767 1.177 1.887 1.177 3.135 0 1.656-.802 3.088-1.965 3.766 1.263.24 2.655-.815 3.406-2.742.38-.975.537-2.023.492-2.996a7.027 7.027 0 0 1 2.488 3.003c-.303 1.01-1.046 1.966-2.128 2.59-1.44.832-3.09.85-4.26.173l.008.021.012-.006-.01.01c.42 1.218 2.032 1.9 4.08 1.586a7.415 7.415 0 0 0 2.856-1.081 6.963 6.963 0 0 1-1.358 3.662c-1.03.248-2.235.084-3.322-.544-1.433-.827-2.272-2.236-2.279-3.58l-.012-.003c-.845.972-.63 2.71.666 4.327a7.415 7.415 0 0 0 2.37 1.935 6.972 6.972 0 0 1-3.86.65c-.727-.767-1.186-1.892-1.186-3.146 0-1.658.804-3.091 1.969-3.768l-.002-.007c-1.266-.25-2.666.805-3.42 2.74a7.415 7.415 0 0 0-.49 3.012 7.026 7.026 0 0 1-2.49-3.018C1.87 9.757 2.613 8.8 3.696 8.174c1.438-.83 3.084-.85 4.253-.176l.005-.006C7.538 6.77 5.924 6.085 3.872 6.4c-1.04.16-2.03.55-2.853 1.08a6.962 6.962 0 0 1 1.372-3.667l-.002.003c1.025-.243 2.224-.078 3.306.547 1.43.826 2.269 2.23 2.28 3.573L8 7.941c.837-.974.62-2.706-.673-4.319a7.415 7.415 0 0 0-2.362-1.931Z"/>
</svg> 
</div>
    </div>
    <div class="col-6" style='
    margin-top:auto;
    margin-bottom:auto;text-align:center;'>

  <form action="UploadImg/Webpage.php">
    <input type="submit" name="website" style="background: linear-gradient(to bottom, #ffcc66 0%, #ff9900 100%);
    width:30%;
    box-shadow: 3px 5px 10px grey;
    height:40px;
    border-radius:5px;
    border:none;
    color:white;" value="Website">
  </form>  
  <br>
  <form action="UploadImg/Art.php">
    <input name="art" style="background: linear-gradient(to bottom, #ffcc66 0%, #ff9900 100%);
    width:30%;
    box-shadow: 3px 5px 10px grey;
    height:40px;
    border-radius:5px;
    border:none;
    color:white;"
    type="submit" value="Art" action='sample/sample.html'>
</form>
  <br>
<form action="UploadImg/Design.php">
    <input type="submit" name="design" style="background: linear-gradient(to bottom, #ffcc66 0%, #ff9900 100%);
    width:30%;
    box-shadow: 3px 5px 10px grey;
    height:40px;
    border-radius:5px;
    border:none;
    color:white;" value="design">
  </form>
  </div>
    <div class="col-6" style=''>
      <img src='images/chekcproject.png' style="float:left" width="100%" alt='front end developer'>
    </div>
</div>
</article>
<!-----------------------------------------Project-End---------------------------------------------->

<!------------------------------------------Form box start--------------------------------------------------------------------------------->
<div class="container">
<div class="alert text-center" style="background-color:#ffc94b;color:#4a6163;font-family:comic sans ms;" role="alert">
<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
width="70" height="70" viewBox="0 0 900.000000 547.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,547.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M1450 3855 l0 -1145 760 0 760 0 0 -67 c-1 -235 -93 -528 -236 -749
-233 -363 -608 -613 -1024 -684 -63 -11 -148 -20 -187 -20 l-73 0 0 -386 0
-387 108 7 c585 39 1104 270 1507 673 342 342 553 753 643 1253 l26 145 3
1253 4 1252 -1146 0 -1145 0 0 -1145z"/>
<path d="M5260 3855 l0 -1145 766 0 765 0 -6 -82 c-31 -384 -171 -705 -420
-967 -270 -282 -615 -443 -1005 -470 l-95 -6 -3 -384 -2 -384 112 7 c580 37
1101 270 1504 672 348 349 552 746 647 1264 20 112 21 143 24 1378 l4 1262
-1146 0 -1145 0 0 -1145z"/>
</g>
</svg>
<font size="5">Build your digital bridge through the expertise of the most trusted website design and development company. We 
provide you with <U style="color:white;">top-notch  Website developement service</U>,
meant to increase your traffic and rate of conversion
 </font><H4>I CAN MAKE FOR YOU IN <U style="color:white;">
<b style="color:#4a6163">AFFORDABLE PRICE</b></U></h4>

</div>
</div>

<section>
<div class="container" id="formbox" style="">

<div class="row" style="margin-left:auto">
    
<div class="col-md-3" style="width:350px;height:350px;margin-left:auto;margin-right:auto;margin-top:20px">

<img src="images/keepintouch.png" width="100%">

</div>

<div class="col-md-6" style="margin-left:auto;margin-right:auto">
<form action="userdata.php" method="post" autocomplete="off">
<br>
  
  <div class="row">
     <div class="col-md-6">
        <div class="group" style="font-family:comic sans ms;color:#4a6163;">
                <label>Name</label>
                <input type="text" placeholder="FirstName SPACE LastName" style="width:100%" name='name' id="contact-name" onkeyup="validateName()">
                <span id="name-error"></span>
        </div>

      </div>

    <div class="col-md-6">
      <div class="group" style="font-family:comic sans ms;color:#4a6163;">
                <label>Email Id</label>
                <input type="email" placeholder="Enter Email" style="width:100%" name='email' id="contact-email" onkeyup="validateEmail()">
                <span id="email-error"></span>
            </div>
  </div>
</div>

<br>

  <div class="row"> 
   
  <div class="col-md-6">
    <div class="group" style="font-family:comic sans ms;color:#4a6163;">
                <label>Location</label>
                <input type="text" placeholder="Location" style="width:100%" name='location' id="contact-location"  onkeyup="validateLocation()">
                <span id="location-error"></span>
    </div>
  </div>

    <div class="col-md-6">
    <div class="group" style="font-family:comic sans ms;color:#4a6163;">
                <label>Phone No.[OPTIONAL]</label>
                <input type="tel" placeholder="123 456 7890" id="contact-phone" name='phno' style="width:100%" onkeyup="validatePhone()">
                <span id="phone-error"></span>
    </div>
    </div>
  
  </div>

<br>

  <div class="row">
    <div class="col-md-12">
    <div class="group" style="font-family:comic sans ms;color:#4a6163;">
                <label>Your Message</label>
                <textarea  rows='5' col='' type="text" placeholder="Enter your message" name='message' style="width:100%" id="contact-message" onkeyup="validateMessage()">
                    </textarea>
                    <span id="message-error"></span>
            </div>
   </div>
  </div>
  <br>  

  <div class="row"> 
   
  <div class="col-md-6">
  <div style="text-align:center">
 <input type="submit" class="btn btn" id="" name="submit" value="Submit" onclick="return validateForm()" style="font-family:comic sans ms;
  width:30%;
  background-color:#f9a66c;
  color:#4a6163;
  border-radius:10px;
  border:1px solid #f9a66c;
  
">
  <span id="subit-error"></span>
  <hr>
</div>
</div>
 
   <div class="col-md-6">
   <div style="text-align:center">
  <input type="reset" value="Reset" class="btn btn"  style="font-family:comic sans ms;
  width:30%;
  background-color:#f9a66c;
  color:#4a6163;
  border-radius:10px;
  border:1px solid #f9a66c;
  
">
<hr>
  </div>

</div>
</form>
</div>

</div>
</section>
<!----------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------progress bar Start----------------------------------------------------------------->
<div class="container" style="border:1px solid grey;box-shadow: 3px 5px 10px grey;">
<h4 style="font-family:comic sans ms">My skills</h4>
Html,Css,Js,Typescript,Angular
<div class="progress">
<div class="progress-bar bg-light-warning" 
  role="progressbar" style="width: 75%;border-radius:0;background-color:grey" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br>
php
<div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br>
Python Developer
<div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br>






</div>
<!----------------------------------------------------Progress bar End-------------------------------------------------------------------->
<hr>
<!------------------------------------------------------Gird Images- start----------------------------------------------------------------->
<section>
  <div class=container>
  <div class="parent">
   <img src="images/image4.jpg" class="one" style="">
   <img src="images/image3.png" class="two">
   <img src="images/image5.jpg" class="five">
   <img src="images/image2.png" class="three">
   <img src="images/image1.jpg" class="four">
   <!---<img src="images/image3.png" class="four">--->
   
  </div>
  <div>
</section>  
<!--------------------------------------------------------Grid Images-End----------------------------------------------------------------->
<hr> 
<!---------------------------------------------------------Admin panel Start---------------------------------------------------------->
<div class="container" style="border:1px solid black;" id="adminPanel">
  <div class="row" style="margin:10px;">
    <div class="col-md-12 text-center" style="">
    <form action="http://localhost/portfolio/adminme.php">
    <input type="submit" 
    style="width:100%;padding:5%;font-family:comic sans ms;
    color:white !important;
    background-color:black !important;
    border-radius:10px;
    " 
    value="Only admin has access for this pannel">
    
</form>
</div>
    </div>
    </div>
    <br>
    <br>
<!---------------------------------------------------------Admin panel End----------------------------------------------------------->
<!------------------------------------------------------Footer Start--------------------------------------------------->
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
  
<!-------------------------------------------------------Footer-End--------------------------------------------------------------------------->
<script>
 //Pop over


  //form validation
        var nameError=document.getElementById('name-error');
        var phoneError=document.getElementById('phone-error');
        var locationError=document.getElementById('location-error');
        var emailError=document.getElementById('email-error');
        var messageError=document.getElementById('message-error');
        var submitError=document.getElementById('subit-error');
//name validation  
        function validateName(){
        var name = document.getElementById('contact-name').value;

        if(name.length == 0){
            nameError.innerHTML = 'Name is required';
            nameError.style.color='#f9a66c'
            return false;
        }
        if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
            nameError.innerHTML = 'Write full name';
            nameError.style.color='#f9a66c'
            return false;
        }
        nameError.innerHTML = 'valid';
        nameError.style.color='green'
        return true;
    }
//phone validation
    function validatePhone(){
        var phone = document.getElementById('contact-phone').value;

        if(phone.length == 0){
            phoneError.innerHTML = 'Phone no is required';
            phoneError.style.color='#f9a66c'
            return false;
        }
        if(!phone.match(/^[0-9]{10}$/)) {
            phoneError.innerHTML = 'Only 10 digits please.';
            phoneError.style.color='#f9a66c'
            return false;
        }
        phoneError.innerHTML='valid';
        phoneError.style.color='green'
        return true;
    }
 //Email validation
        function validateEmail(){
            var email = document.getElementById('contact-email').value;
        
            if(email.length == 0){
                emailError.innerHTML='Email is required'
                emailError.style.color='#f9a66c'
                return false
            }
            if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
                emailError.innerHTML = 'Email Invalid'
                emailError.style.color='#f9a66c'
                return false;
            }

            emailError.innerHTML = 'valid'
            emailError.style.color='green'
            return true;
        }
//Message validation
function validateMessage(){
    var message = document.getElementById('contact-message').value;
    var required = 30;
    var left = required - message.length;
    if(left>0){
        messageError.innerHTML = left+'more characters required';
        messageError.style.color='#f9a66c';
        return false;
    }

    messageError.innerHTML = 'valid';
    messageError.style.color='green';
    return true;
}  
//Location validation
function validateLocation(){
  var location = document.getElementById('contact-location').value;
        
            if(location.length == 0){
                locationError.innerHTML='Location is required'
                locationError.style.color='#f9a66c'
                return false
            }
            locationError.innerHTML = 'valid'
            locationError.style.color='green'
            return true;

}
//button function
function validateForm(){
    if((messageError.innerHTML && nameError.innerHTML && locationError.innerHTML && emailError.innerHTML) === 'valid'){   
        window.location ='userdata.php';
        return true;
      

    }
    else
    {
        return false;
    }
    
      //document.getElementById('contact-phone').value= '';
        //document.getElementById('contact-email').value= '';
        //document.getElementById('contact-location').value= '';
        //document.getElementById('contact-message').value= '';
}
 </script>   
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>

</body>
</html>
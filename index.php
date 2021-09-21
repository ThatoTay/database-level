<?php

session_start();

require 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="ICON/Logo.png" type="image/x-icon">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/STYLE.css">
    <script src="JS/APP.js"></script>
    <script src="https://kit.fontawesome.com/51bc2aa7cb.js" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key..............&callback=initMap"></script>
</head>
<body>
  <header>

    <link href="https://fonts.googleapis.com/css?family=Psoppins%26display=swap" rel="stylesheet">

<nav>
    <div class="logo">
       <img src="img/logo.png" width="350px" height="60px">
    </div>

    <ul class="nav-links">
        <li class="nav-btn" data-row-id="row1"><a class="active" href="#section4">Home</a></li>
        <li class="nav-btn" data-row-id="row1"><a href="#section1">About blood</a></li>
        <li class="nav-btn" data-row-id="row1"><a href="#section2">Where to donate</a></li>
        <li class="nav-btn" data-row-id="row1"><a href="#section3">Request blood drive</a></li>
        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <li class="active"><a href="login.php">Log In</a></li>

        
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>
  </header>

<br/><br/><br/><br/><br/> 

  <div id="section4">

  <img src="img/back.png" class="first">


  <img style="float: right; margin: 0px 30px 30px 0px;" src="blood/ouetehuis bloedskenk.gif" width="450px" height="300px" />
  <p class="paragraph1">Less than 1% of South Africans are active blood donors. A unit of blood only lasts 42 days after donation and,
     for this reason, it is important for blood donors to donate regularly. Donors can give blood as often as every eight weeks. <br/> <br/>
     Every unit of blood can save a minimum of three lives as blood is separated into red blood cells, plasma and platelets.  <br/> <br/>
    Social Donors aims to collect 3000 units of blood per day to ensure a safe and sufficient blood supply in the health
     care system. This is the journey of 1 unit of donated blood.
    </p>

</div>
<br/><br/><br/><br/><br/><br/><br/>

<div id="section1">
  <h1> BLOOD TYPES</h1>
  <br/><br/>
  
  <img style="float: left; margin: 0px 30px 30px 0px;" src="img/types1.png" width="570px" height="400px" />
  <p class="paragraph1">The differences in human blood are due to the presence or absence of certain protein molecules called antigens and 
    antibodies. Individuals have different types and combinations of these molecules.<br/><br/>
   The blood group you belong to depends on what you have inherited from your parents. <br/><br/>
    To date, more than 20 genetically determined blood group systems exist, but the AB0 and Rh blood group systems are the most important ones used for blood transfusions.<br/><br/>
    Not all blood groups are compatible with each other. Mixing incompatible blood groups leads to blood clumping, or agglutination, which is dangerous for individuals.
    
    </p>

</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


<div id="section1">
 


<br/><br/><br/>

<center>
<div class="container4">
  <div class="card">
      <div class="icon4">
        <img  src="blood/giphy.gif" width="120px" height="100px" />
      </div>
      <div class="content4">
          <h3>Why Donate?</h3>
          <p class="paragraph1">
            Donating safe blood means are committed to participating  in a vital community service to improve the quality of life, for patients in need of
           blood transfusions.Donating blood regularly is beneficial to prevent and reduce heart attacks and liver ailment. The risk of heart and liver related 
           problem is caused by the iron overload in the body. Donating blood helps in maintaining the iron level in the body and thus reduce those risk.</p>
      </div>
      <a class="more"></a>
  </div>
  <div class="card">
      <div class="icon4">
        <img  src="blood/unnamed4.png"  width="120px" height="100px" />
      </div>
      <div class="content4">
          <h3>Health</h3>
        <p class="paragraph1">
          The Social Donors has various measures in place to protect the health and wellbeing of blood donors and patients. The body tries to adjust to the loss of red blood the cells we donate blood, these adjustments
           also help in accelerating the wound healing process.Blood contains iron, if the iron in blood is overloaded it can increase the chances of blockage in blood vessels.
            Blood donation can help to reduce the amount of iron in the blood thus helps in lower cholesterol.
           </p>
      </div>
      <a class="more"></a>
  </div>
  <div class="card">
      <div class="icon4">
         
  <img style="margin-right: 1px;"  src="blood/giphy1.gif" width="120px" height="110px" />
      </div>
      <div class="content4">
          <h3>Thank you!</h3>
          <p class="paragraph1">
            The universal access to safe blood is the lifeline for the healthcare system of any nation .We can all be proud of the dedicated and selfless
             South Africans who regularly donate their blood to save the lives of thousands of other people every year.There is no other method to manufacture blood; 
             the only way to collect blood is from the people who are willing to donate. The blood that we donate is also stored at the blood bank after their usage and used in 
             future when needed. Some chemicals are added to it in order to preserve it for long time and use it in future when needed.
        </p>
      </div>
      <a class="more"></a>
  </div>
</div>
</center>
<br/><br/><br/><br/><br/>
 </div>


 <div id="section2">
  <h1>WHERE AND HOW TO DONATE</h1>
  <br/><br/><br/><br/>


  <a href="#" class="button1" >BECOME A DONOR <br/><br/><i class="fas fa-phone"><br/></i>                  011 234 5678</a>

  <img style="float: left; margin: 0px 50px 50px 80px;" src="blood/donate.png" width="600px" height="480px" />
  <P class="paragraph2">Donate Blood <br/>
    &<br/>
    Save a Life<br/></P>
    <p class="paragraph1">We need: Nearly 400 new donors a day to meet demand. Around 135,000 new donors a year to replace those who can no longer donate.
       40,000 more black donors to meet growing demand for better-matched blood.</p>
 
 </div>
 <br/><br/><br/><br/>

 <div id="section3">
   <h1> REQUEST A BLOOD DRIVE FOR SOMEONE ELSE</h1>
   <br/><br/><br/><br/>
<div class="container">
    <div class="title"><b>Their personal details and physcial address</b></div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name and Surname</span>
            <input type="text" placeholder="Enter your name and surname" required>
          </div>
          <div class="input-box">
            <span class="details">Country</span>
            <input type="text" placeholder="Enter your Country" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Province/State</span>
            <input type="text" placeholder="Enter your Province/State" required>
          </div>
          <div class="input-box">
            <span class="details">Cell phone number</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your address" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <input type="radio" name="gender" id="dot-4">
          <span class="gender-title">Blood type</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">A</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">B</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">O</span>
            </label>
            <label for="dot-4">
              <span class="dot four"></span>
              <span class="gender">I DON'T KNOW</span>
            </label>
          </div>
        </div>
        <center>
        <div class="button5">
          <input type="submit" value="SUBMIT">
        </div>
        </center>
      </form>
    </div>
  </div>

 </div>
 

<br/><br/><br/><br/><br/><br/>
 <div id="section5">

  <table>
    <tr>
      <td>
      <div class="location">
        <P>
          <div class="search-location">
          YOUR LOCATION: <input type="location" placeholder="Search..">
          <button type="submit"><i class="fa fa-search"></i></button>
          </div>
          
        </P>
        </div>
        <br/><br/><br/><br/>
        <p style="color: #00003E; font-size: 15pt;"><b>Operating Hours</b></p>
      <p class="ptime">    
        Monday
        13:00 - 16:30<br/>
        Tuesday
        08:30 - 16:30<br/>
        Wednesday
        08:30 - 19:00<br/>
        Thursday
        08:30 - 18:00<br/>
        Friday
        08:30 - 16:30<br/>
        Saturday
        08:30 - 13:00<br/>
        Sunday
        -closed
          </p>

<center>
<h1> For Info:</h1>
<br/>
    <p style="color: #00003E; font-size: 15pt;">
      Phone: 011 234 5678 <br/>
      Email: service@Socialdonors.org.za
    </p>
</center>

      </td>
      <td>
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.74707641882!2d28.03143371486728!3d-26.204904683437572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950ea6594c90a3%3A0x165896dec7234252!2sSci-Bono%20Discovery%20Centre!5e0!3m2!1sen!2sza!4v1623256939823!5m2!1sen!2sza"
 width="930" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div> 
</td>
    </tr>
</table>
</div>

<a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i> </a>

<a class="question" href="https://sanbs.org.za/faqs/"><i class="far fa-question-circle"> Help</i></a>
<script>
  const more = document.querySelectorAll('.more')
  for(let i = 0; i<more.length; i++){
      more[i].addEventListener('click', ()=>{
          more[i].parentNode.classList.toggle('active')
      })
  }
</script>
 <br/>
<br/>
  <br/>
  <footer class="footer">
    <div class="footer-container">
      <div class="row">
  
        <div class="footer-heading footer-1">
        <h4>ABOUT BLOOD DONORS</h4>
        <a href="#">Home</a>
        <a href="#">Who can donate?</a>
        <a href="#">Why should we donate?</a>
        <a href="#">Donor Partners</a>
        <a href="#">FAQs</a>

        </div> 
        <div class="footer-heading footer-2">
          <h4>WHERE TO DONATE?</h4>
          <a href="#Section5">Donors center</a>
          <a href="https://sanbs.org.za/plasma-and-platelets/"> Plasma and Platelets</a>
          <a href="#home">Why should we donate?</a>
          <a href="#section3"> Book a blood drive</a>
        
          </div> 
          
          <div class="footer-heading footer-3">
            <h4>REQUEST A BLOOD DRIVE</h4>
            <a href="#section5">Blood types</a>
            <a href="https://sanbs.org.za/types-of-donation/">Types of donation</a>
            <a href="https://sanbs.org.za/chat-page/">Chat pages</a>
            <a href="https://sanbs.org.za/clinical-services/">Clinical services</a>
            <a href="#section3">Contact us</a>
            </div> 


            <div class="footer-email-form">
              <h5>Subscribe to our news</h5>
             
           <input type="email" placeholder="Enter your emaill address" id="footer-email">
           <br/> 
           <input type="submit" value="SUBMIT" id="footer-email-btn"> 
           <h6>By subscribing you confirm that you have <br/>read and accept our <span> Terms of Use</span></h6>
        </div>

      
      </br>   </br>   </br>   </br>   </br>   </br>   </br>   </br>   </br>   </br>   </br>   </br>   </br>   </br>
            <div class="footer-heading footer-5">

          <div class="social-links">
           
            <a href="https://twitter.com/?lang=en"><img src="ICON/twitter1.png"class= "icon" align="right"hspace="2px" vspace="2px"></i></a>
            <a href="https://www.instagram.com/"><img src="ICON/linked1.png"class= "icon" align="right"hspace="2px" vspace="2px"></i></a>
           <a href="https://www.facebook.com/taypromosandevents/"><img src="ICON/facebook1.png" class="icon" align="right"hspace="2px"vspace="2px"></i></a>
              
               
          </div>
        </div>
        <img src="img/footer.jpg" class="footerimg" width="240px" height="70px">
             <p>  &#169; SocialDonors 2011-2020.            Terms&Condition    Privacy      usEnglish</p> 
      </div>
      </div>
      
 </footer>
</body>
</html>
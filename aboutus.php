<DOCTYPE! html>
<html lang=en>
    <head>
        <title>About Us</title>
        <link rel="stylesheet" type="text/css" href="footer.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        <style>
           body {
              font: 400 15px Lato, sans-serif;
              line-height: 1.8;
              color: #818181;
                }
          .jumbotron {
            background-color: #CC324b;
            color: #fff;
            padding: 100px 25px;
            font-family: 'Roboto', sans-serif;
            background:url('https://i.pinimg.com/originals/b4/82/00/b48200cf80cf517835a07eeab8f34d39.jpg');
            background-size: contain;
        }
        .logo-small {
          color: 	#086d8f;
          font-size: 50px;
        }
        .about{
          background-color:  #e4e4e4;
        }
        .service{
          background-color:  #e4e4e4;
        }

        .contact{
          background: #c31432;  /* fallback for old browsers */
          background: -webkit-linear-gradient(to right, #240b36, #c31432);  /* Chrome 10-25, Safari 5.1-6 */
          background: linear-gradient(to right, #240b36, #c31432); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          color:white;
        }
        .aboutheader{
          background: #0F2027;  /* fallback for old browsers */
          background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
          background: linear-gradient(to right, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

          color:white;
        }
    
        #myBtn {
          display: none;
          position: fixed;
          bottom: 20px;
          right: 30px;
          z-index: 99;
          font-size: 18px;
          border: none;
          outline: none;
          background-color: rgb(0, 0, 0);
          color: white;
          cursor: pointer;
          padding: 15px;
          border-radius: 4px;
        }

        #myBtn:hover {
          background-color: #555;
        }

        #button:hover{
          font-weight: 600;
          color:rgb(14, 122, 28);
          background-color:#ffff;
        }
        .button{
          font-weight: 600;
          color:#ffff;
          background-color:rgb(14, 122, 28);
        }
    
    </style>   
    </head>
    <body>
<!-- Container (Title Section) -->
<div class="jumbotron text-center">
  <h1>Tutifi</h1> 
  <p>Connecting Communities for Learning</p> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>


<div class="container aboutheader text-center w3-panel w3-round-large w3-teal">
  <div class="row">
      <div class="col">
          <h2>About Tutifi</h2><br>
      </div>
  </div>
</div>
<br>

<!-- Container (About Section) -->
<div id="aboutmission" class="container-fluid bg-grey text-center about">
    <div class="row">
        <div class="col">
          <h4 style="line-height: 25px"><strong>MISSION: <br><br> </strong> Someone like Personal Tutor to Learn, Someone like to Learn in Group, <br> Someone Like to Learn by its Own
            ,Someone Like Learn from Internet , <br> Someone Like to Learn from its Ideal ,<br>
            We at TUTIFI make Every possible Way of Learning ,This Most Easisiet Way is <br> "OUR MISSION"</h4>
         </h4><br>
        </div>
    </div>
  </div>
 <br><br>
 <div id="aboutvision" class="container-fluid bg-grey text-center about">
  <div class="row">
      <div class="col">
       <h4><strong>VISION: <br> <br></strong>Learn Whatever Wherever Whosoever , In His/Her Own Way Of Leaning Across the Globe.</h4>
       <pclass="lead">Tutifi.com is a one step solution for learning enthusiasts .Our Vison is to provide 
         an Independent Platform using which one can learn whatever ,whenever & wherever they wants to ,in their own way.
        <br>Using Tutifi.com ,students ,parents & professional can compare tutors ,trainors and institutes and choose the ones
        that best suite their requirement. <br><br> <strong>If you are a tutor ,trainor or an institute ,you can join us to spread your 
      knowledge both online as well as offline.</strong></p>
       <h4 class="mission"><br><a href="#yash"><button class="btn btn-lg button" id="button"> Get in Contact</button></a></h4>
     
      </div>
  </div>
</div>
<br><br>

  <!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center service">
    <h2><b>SERVICES</b></h2>
    <h4>What we offer</h4>
    <br>
    <div class="row">
      <div class="col-sm-4" >
          <span><ion-icon name="contacts" style="font-size:64px;color:#086d8f;"></ion-icon></span>
        <h4>Counselling</h4>
     
      </div>
      <div class="col-sm-4" >
        <span><ion-icon name="videocam" style="font-size:64px;color:#086d8f;"></ion-icon></span>
        <h4>Seminars & Webinars</h4>
        
      </div>
      <div class="col-sm-4">
        <span><ion-icon name="paper" style="font-size:64px;color:#086d8f;"></ion-icon></span>
        <h4>Blogs</h4>
        
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-4" >
        <span><ion-icon name="clipboard" style="font-size:64px;color:#086d8f;"></ion-icon></span>
        <h4>Exam Preperation</h4>
        
      </div>
      <div class="col-sm-4">
        <span ><ion-icon name="trophy" style="font-size:64px;color:#086d8f;"></ion-icon></span>
        <h4>CERTIFIED Univerties Tieup</h4>
        
      </div>
      <div class="col-sm-4" >
        <span><ion-icon name="book"  style="font-size:64px;color:#086d8f;"></ion-icon></span>
        <h4>Study Material</h4>
      
      </div>
    </div>
  </div>
   <br><br>
   



    <!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey text-center contact">
    <h2 class="text-center"> <a name="yash"> CONTACT US</a></h2>
    <div class="row">
      <div class="col">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Kolkata ,India</p>
        <p><span class="glyphicon glyphicon-phone"></span> +91 9057521772 </p>
        <p><span class="glyphicon glyphicon-envelope"></span> contactus@tutifi.com</p>
      </div>
    </div>
  </div>

  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
 <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("myBtn").style.display = "block";
          } else {
              document.getElementById("myBtn").style.display = "none";
          }
      }
      
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
      </script>

  
  <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
    <script src=".\script\jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </body>
    <?php
    include 'footer.php';
    ?>
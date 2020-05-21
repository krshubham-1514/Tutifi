<?php
session_start();
//Setting the icon for user signin

?>

<!doctype html>
<head>
<meta name="viewport" content="width=device-width,intial-scale=1.0">
<meta name="description" content="Tutifi helps you in choosing best home tutor or coaching center as per your requirements free of cost.">
<meta name="keywords" content="tutors,coaching,students,teachers,studies,professors">
<title>Tutifi-Find best tutors & coaching centers nearby
</title>
</head>
<link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="user_pref.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.min.structure.css">
<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.min.theme.css">
<link rel="stylesheet" type="text/css" href="search.css">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Oswald|Questrial|Raleway|Roboto|Ubuntu" rel="stylesheet">  
<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arimo|Comfortaa|Fira+Sans|Karla|Maven+Pro|Nunito|PT+Sans" rel="stylesheet">


<body>

<!--header for sign up and signin-->
<div class="header_first_container">
   <div class="comp_logo">
    
 
   
   <img src="logos/home.png" height="40px" width="40px" class="menu" style="justify-self:start;margin-left:15px;cursor:pointer;">
   <img src="logos/tutifi.png" height="60px" width="120px" style="padding:1%;padding-left:4%;"> 
   <img src="logos/login.png" height="40px" width="40px" id="search" style="justify-self:end;margin-right:15px;cursor:pointer;"> 
   </div>
   <div class="location">
   
    <form action="" method="post">
    <span>&nbsp&nbsp<img src="logos/location.png" height="20" widht="25"><span>
    &nbsp <select name="location_user">
      <option selected disabled>Select your city</option>
      <option value="kolkata">Kolkata</option>
      <option value="patna">Panta</option>
      <option value="nagpur">Nagpur</option>
      <option value="ranchi">Ranchi</option>
      <option value="dehli">Dehli</option>
      </select>
    </form>
   </div>
   <div class="contact">
      
   </div>
   <div class="user_account">
   

   <!-- user help-->
   <div class="sign_in">
   <a href="choicelogin.php"><img src="logos/log.png" height="20" width="20">&nbsp&nbspLogin / Signup</a>
   </div>
   <div class="sign_in">
   <a href="user_logout_succ.php"><img src="logos/contact_us.png" height="20" width="20">&nbsp&nbspContact Us</a>
   </div>

  
   <?php 
   if(isset($_SESSION['user_logged']) || isset($_SESSION['tutor_logged']))
   {
     ?>
   <div class="sign_up">
       <a href="user_logout_succ.php">Logout</a>
   </div>
   <?php
   }
   ?>
</div>
</div>
<div class="search_hidden"  style="background-color:#cc324b;height:auto;width:98%;padding:1%;text-align:center;">
  <form action="" method="">
  <ul  style="margin:0;" id="search_hidden_align">
        
        <input type="text" name="search_tut" style="font-size:14px;width:100%;border-top-left-radius:3px;border-bottom-left-radius:3px;height:45px;border:0px solid #cccccc;" id="search_input" placeholder=" &nbsp&nbsp Search....ex.maths,science">
        <input type="submit" name="submit" value="" id="search_btn" style="width:50px;height:45px;border:0;background-color:#575757;color:white;cursor:pointer;border-top-right-radius:3px;border-bottom-right-radius:3px;">
  </ul>
  </form>
</div>
<div class="account_hidden">
<div class="sign_in">
    <span><img src="logos/home_drop.png" height="45" width="45"> &nbsp<a href="index.php">Home</a></span> 
  </div>
<div class="sign_in">
<span><img src="logos/login_lock.png" height="45" width="45"> &nbsp <a href="choicelogin.php">Login</a></span> 
   </div>
   <div class="sign_up">
   <span><img src="logos/user.png" height="45" width="45"> &nbsp <a href="choice_create_account.php">Create account</a></span> 
   </div>
   <div class="sign_up">
   <span><img src="logos/user.png" height="45" width="45"> &nbsp <a href="myaccount.php">My account</a></span> 
   </div>
   <div class="sign_up">
   <span><img src="logos/user.png" height="45" width="45"> &nbsp <a href="user_logout_succ.php">Logout</a></span> 
   </div>
</div>
<!-- header for category in which we deal-->
<div class="header_second_container">
    <ul class="category_user">
        <li class="cat1"><br><img src="logos/it_class.png" height="60px" width="60px"><br> Tutions<span style="color:#474747;font-size:10px;">&#9660</span>
        <div class="inner_container">
          <div class="inner_grid_conatiner">
        
        <ul>
        <li>School tution (subject wise)</li>
        <li><a href="user_pref.php">English</a></li>
        <li><a href="user_pref.php">Science</a></li>
        <li><a href="user_pref.php">Physics</a></li>
        <li><a href="user_pref.php">Chemistry</a></li>
        <li><a href="user_pref.php">Maths</a></li>
        <li><a href="user_pref.php">Hindi</a></li>
     
        </ul>
        <ul>
        <li>School Competive Exams</li>
        <li><a href="user_pref.php">NTSE</a></li>
        <li><a href="user_pref.php">KVPY</a></li>
        <li><a href="user_pref.php">NSO</a></li>
        <li><a href="user_pref.php">IMO</a></li>
        <li><a href="user_pref.php">NSTSE</a></li>
        
     
        </ul>
        <ul>
        <li>Other classes</li>
        
        </ul>
        </div>
       </div>
          </li>

        <li class="cat4"><br><img src="logos/it_class.png" height="60px" width="60px"><br> Exam prepration<span style="color:#474747;font-size:10px;">&#9660</span>
        <div class="inner_container">
          <div class="inner_grid_conatiner">
        <ul>
        <li>Engineering</li>
        <li><a href="user_pref.php">Jee mains</a></li>
        <li><a href="user_pref.php">Jee advance</a></li>
        <li><a href="user_pref.php">BITSAT</a></li>
        <li><a href="user_pref.php">VITEEE</a></li>
        <li><a href="user_pref.php">COMEDK</a></li>
        </ul>
        <ul>
        <li>Medical</li>
        <li><a href="user_pref.php">NEET PG</a></li>
        <li><a href="user_pref.php">NEET UG</a></li>
        <li><a href="user_pref.php">AIIMS MBBS</a></li>
        <li><a href="user_pref.php">AIIMS PG</a></li>
        <li><a href="user_pref.php">JIPMER</a></li>
        </ul>
        <ul>
        <li>Bschool</li>
        <li><a href="user_pref.php">CAT</a></li>
        <li><a href="user_pref.php">XAT</a></li>
        <li><a href="user_pref.php">CMAT</a></li>
        <li><a href="user_pref.php">MAT</a></li>
        <li><a href="user_pref.php">DU JAT</a></li>
        </ul>
        <ul>
        <li>Law</li>
        <li><a href="user_pref.php">CLAT PG</a></li>
        <li><a href="user_pref.php">AILET PG</a></li>
        <li><a href="user_pref.php">CLAT</a></li>
        <li><a href="user_pref.php">AILET</a></li>
        <li><a href="user_pref.php">DU LLB</a></li>
        </ul>
        <ul>
        <li>Finance And Accounts</li>
        <li><a href="user_pref.php">CFA</a></li>
        <li><a href="user_pref.php">CPT</a></li>
        <li><a href="user_pref.php">CS EXAM</a></li>
        
        </ul>
        <ul>
        <li>Design</li>
        
        <li><a href="user_pref.php">CPT</a></li>
        <li><a href="user_pref.php">CS EXAM</a></li>
        
        </ul>

         <ul>
        <li>Other competitve exams</li>
        <li><a href="user_pref.php">SSC CGL</a></li>
        <li><a href="user_pref.php">RBI Assistant</a></li>
        <li><a href="user_pref.php">NDA</a></li>
        <li><a href="user_pref.php">IBPS PO</a></li>
        <li><a href="user_pref.php">SBI PO</a></li>
        </ul>
        </div>
       </div>
       </li>


        <li class="cat2"><br><img src="logos/it_class.png" height="60px" width="60px"><br> Hobby classes<span style="color:#474747;font-size:10px;">&#9660</span>
        <div class="inner_container">
          <div class="inner_grid_conatiner">
        <ul>
        
         <li><a href="user_pref.php">Cooking classes</a></li>
         <li><a href="user_pref.php">Singing classes</a></li>
         <li><a href="user_pref.php">Dance classes</a></li>
         <li><a href="user_pref.php">Photography</a></li>
         
        </ul>
        <ul>
        <li><a href="user_pref.php">Guitar</a></li>
         <li><a href="user_pref.php">Piano</a></li>
         
        </ul>
        </div>
       </div>
       </li>



        <li class="cat3"><br><img src="logos/it_class.png" height="60px" width="60px"><br> IT Courses<span style="color:#474747;font-size:10px;">&#9660</span>
        <div class="inner_container">
          <div class="inner_grid_conatiner">
        <ul>
          <li>Programming languages</a>
        <li><a href="user_pref.php">Java</a></li>
         <li><a href="user_pref.php">Php</a></li>
         <li><a href="user_pref.php">Javascript</a></li>
         <li><a href="user_pref.php">Python</a></li>
         <li><a href="user_pref.php">Net framework</a></li>
        </ul>
        <ul>
          <li>IT training</li>
        <li><a href="user_pref.php">C</a></li>
         <li><a href="user_pref.php">C++</a></li>
         <li><a href="user_pref.php">ASP</a></li>
         <li><a href="user_pref.php">Angular</a></li>
         <li><a href="user_pref.php">React</a></li>                
   
        </ul>
        <ul>
        <li><a href="user_pref.php">Node.js</a></li>
         <li><a href="user_pref.php">Ruby</a></li>
         <li><a href="user_pref.php">Rails</a></li>
                       
   
        </ul>
        
        </div>
       </div>
    </li>





        <li class="cat5"><br><img src="logos/it_class.png" height="60px" width="60px"><br> Speaking classes<span style="color:#474747;font-size:10px;">&#9660</span>
        <div class="inner_container">
          <div class="inner_grid_conatiner">
        <ul>
       
        <li><a href="">English</a></li>
        <li><a href="">German</a></li>
        <li><a href="">French</a></li>
        <li><a href="">Spanish</a></li>
        <li><a href="">Chinese</a></li>        
        </ul>
        </div>
       </div>
       </li>


        <li class="cat6"><br><img src="logos/it_class.png" height="60px" width="60px"><br> Fitness classes<span style="color:#474747;font-size:10px;">&#9660</span>
        <div class="inner_container">
          <div class="inner_grid_conatiner">
        <ul>
       
        <li><a href="">Yoga classes</a></li>
        <li><a href="">Meditation classes</a></li>
        <li><a href="">GYM</a></li>
        </ul>
        
        </div>
       </div>
    </li>

       
    </ul>
</div>



<!--script  part of this page-->
<script src="jquery-3.3.1.js"></script>
<script src="jqueryui/jqueryui.js"></script>
<script>
$(document).ready(function(){
 //first category hover effect
  $(".category_user .cat1").click(function()
  {
    $(".category_user .cat1 .inner_container").slideToggle(400);
    $(".category_user .cat1").css("background-color","#474747");

  });
  $(".category_user .cat1").hover(function()
  {
   

  },
  function()
  {
    $(".category_user .cat1 .inner_container").slideUp(200);
    $(".category_user .cat1").css("background-color","#cc324b");
  })


   //second category hover effect
   $(".category_user .cat2").click(function()
  {
    $(".category_user .cat2 .inner_container").slideToggle(400);
    $(".category_user .cat2").css("background-color","#474747");

  });
  $(".category_user .cat2").hover(function()
  {
   

  },
  function()
  {
    $(".category_user .cat2 .inner_container").slideUp(200);
    $(".category_user .cat2").css("background-color","#cc324b");
  })


     //Third category hover effect
     $(".category_user .cat3").click(function()
  {
    $(".category_user .cat3 .inner_container").slideToggle(400);
    $(".category_user .cat3").css("background-color","#474747");

  });
  $(".category_user .cat3").hover(function()
  {
   

  },
  function()
  {
    $(".category_user .cat3 .inner_container").slideUp(200);
    $(".category_user .cat3").css("background-color","#cc324b");
  })


       //fourth category hover effect
       $(".category_user .cat4").click(function()
  {
    $(".category_user .cat4 .inner_container").slideToggle(400);
    $(".category_user .cat4").css("background-color","#474747");

  });
  $(".category_user .cat4").hover(function()
  {
   

  },
  function()
  {
    $(".category_user .cat4 .inner_container").slideUp(200);
    $(".category_user .cat4").css("background-color","#cc324b");
  })


       //fifth category hover effect
       $(".category_user .cat5").click(function()
  {
    $(".category_user .cat5 .inner_container").slideToggle(400);
    $(".category_user .cat5").css("background-color","#474747");

  });
  $(".category_user .cat5").hover(function()
  {
   

  },
  function()
  {
    $(".category_user .cat5 .inner_container").slideUp(200);
    $(".category_user .cat5").css("background-color","#cc324b");
  })

         //sixth category hover effect
         $(".category_user .cat6").click(function()
  {
    $(".category_user .cat6 .inner_container").slideToggle(400);
    $(".category_user .cat6").css("background-color","#474747");

  });
  $(".category_user .cat6").hover(function()
  {
   

  },
  function()
  {
    $(".category_user .cat6 .inner_container").slideUp(200);
    $(".category_user .cat6").css("background-color","#cc324b");
  })




         //sevents category hover effect
         $(".category_user .cat7").click(function()
  {
    $(".category_user .cat7 .inner_container").slideToggle(400);
    $(".category_user .cat7").css("background-color","#474747");

  });
  $(".category_user .cat7").hover(function()
  {
   

  },
  function()
  {
    $(".category_user .cat7 .inner_container").slideUp(200);
    $(".category_user .cat7").css("background-color","#cc324b");
  })

});
</script>

<!--fixing effect of the header container-->
<script>
  window.onScroll(function()
  {
   alert("my name is shubham kumar sinha");

  });
</script>


<!--HEADER DROP DOWN MENU WHEN SMALL SCREEN -->
<script>
$(document).ready(function(){
  
 $(".menu").click(function()
 {
    $(".header_second_container .category_user").slideToggle(400);
    $(".search_hidden").css("border-bottom","0.25px solid #ad132d");
    
 });
 $("#search").click(function()
 {
  $(".account_hidden").slideToggle(400);
  
    
 });
 $(".menu").click(function()
 {
  
  $(".account_hidden").slideUp(400);
 });
 $("#search").click(function()
 {
  $(".header_second_container .category_user").slideUp(400);
  
    
 });
 //login bar automatic close on click outside



});

</script>
<script>
//this the script for the change of login style on the header after the user has logged
$(document).ready(function()
{
 

   function change_profile()
   {
    alert("your have already log in");
   }
  

});

</script>
<script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
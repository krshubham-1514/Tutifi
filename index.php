<?php
include 'header.php';
?>


<div class="search_tutr">
<div class="fixed-image">
   <div class="lading_page">
   <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 643"><defs><style>.cls-1{fill:url(#linear-gradient);}.cls-2,.cls-6{fill:#fff;}.cls-3{font-size:58.91px;}.cls-3,.cls-7{fill:#545353;font-family:FuturaBT-Bold, Futura Md BT;font-weight:700;}.cls-4{letter-spacing:-0.02em;}.cls-5{letter-spacing:0em;}.cls-6,.cls-9{stroke:#2b2b2b;stroke-miterlimit:10;stroke-width:4px;}.cls-7{font-size:35.81px;}.cls-8{letter-spacing:-0.08em;}.cls-9{fill:none;}</style><linearGradient id="linear-gradient" y1="322" x2="1920" y2="322" gradientUnits="userSpaceOnUse"><stop offset="0.13" stop-color="#269"/><stop offset="0.38" stop-color="#495196"/><stop offset="0.76" stop-color="#7e3391"/><stop offset="0.95" stop-color="#93278f"/></linearGradient></defs><title>Artboard 1</title><path class="cls-1" d="M0,643.5S313.12,531.11,876,415.19C1451,296.77,1920,.5,1920,.5v643Z"/><path d="M1620.68,93.25v452.5c0,25.72-20.36,46.75-45.26,46.75H1380.26c-24.9,0-45.26-21-45.26-46.75V93.25c0-25.72,20.36-46.75,45.26-46.75h195.16C1600.32,46.5,1620.68,67.53,1620.68,93.25Z"/><rect class="cls-2" x="1351.69" y="60.52" width="250.97" height="511.29" rx="29.12" ry="29.12"/><text class="cls-3" transform="translate(120.61 164.07)">LEARN AND GROW <tspan x="0" y="70.69">WITH BEST TE</tspan><tspan class="cls-4" x="401.13" y="70.69">A</tspan><tspan class="cls-5" x="442.64" y="70.69">CHERS </tspan><tspan x="0" y="141.38">AROUND </tspan><tspan class="cls-4" x="290.42" y="141.38">Y</tspan><tspan x="324.56" y="141.38">OU</tspan></text><path d="M1435.17,53.81l0,15.84c0,7.32,5.29,13.26,11.84,13.26h76.42c5.07,0,9.17-4.6,9.17-10.26V53.81Z"/><rect class="cls-6" x="121.64" y="357.32" width="224.99" height="71.18" rx="35.59" ry="35.59"/><text class="cls-7" transform="translate(145.7 406.28)">Find <tspan class="cls-8" x="88.87" y="0">T</tspan><tspan x="105.76" y="0">utor</tspan></text><line class="cls-9" x1="393" y1="464.5" x2="393" y2="462.5"/></svg>
   </div>
</div>
    <div class="find">
     <form action="" method="post">
         <ul class="find_tut">
     <!--<li style="Color:white;">Search from 1000+ tutors...</li>-->
</ul>
         <ul class="find_tut" style="display:none">
         <input type="text" name="search_tut" style="font-size:14px;" id="search_input" placeholder=" &nbsp&nbsp Search subject ex.maths,english,dance etc.">
         <input type="submit" name="submit" value="Find toutor near by" id="search_btn" style="width:140px;height:50px;opacity:0.8;background-color:black;color:white;cursor:pointer;z-index:0;">
         </ul>
     </form>
 </div>
</div>

</div>


</div>
<div class="body_container">
<!--section for tutors-->
<div class="tutor_outer_container">
<div class="inner_mobile_container4">
<div class="tutors" style="margin-top:0px;">
<div class="stat_tut" >

     
    
     
     <div class="container_tutor1">
      <br>
     <h2>Are you a Student/Parent?</h2><br>
       <br>
      <a href="user_pref.php" style="background-color:#cc324b;color:white;padding:1.7%;"><ion-icon name="search"></ion-icon>Find Tutors </a>
      <br>
     <br>
     <br>
	 <p>Search from team of 1000+ tutors in your locality.</p>
	 <br>
     <br>
     <!--here is the account container for the students-->
      <div class="account_container">
       
       <a href="user_account.php" style="border:2px solid #7f7f7f;color:#565554;padding:2%;" class="hover_student"><ion-icon name="person-add" icon-size="large"></ion-icon> Create Account</a>
       &nbsp&nbsp &nbsp <span style="font-size:25px;color:#cccccc;">|</span>&nbsp&nbsp&nbsp
        <a href="signin.php" style="border:2px solid #7f7f7f;color:#565554;color:#565554padding:1.7%;" class="hover_student"><ion-icon name="lock"></ion-icon> Login</a>
     </div>
     </div>
    <br> 
</div>
<div class="stat_tut">
     <div class="container_tutor2">
     <br>
     <h2>Are you a tutor?</h2><br>
      <br>
      <a href="tut_account.php" style="background-color:#cc324b;color:white;padding:1.7%;" class="hover_student"><ion-icon name="person-add" icon-size="large"></ion-icon> Create a profile</a>
      <br>
      <br>
      <br>
	 <p>Join the team of 1000+ tutors to grow your reach to students.</p>
     <br>
     <br>
    
  
     
     <!--here is the account container for the tutors-->
     <div class="account_container">
    
     
     <a href="tutor_login.php" style="border:2px solid #7f7f7f;color:#565554;color:#565554padding:1.7%;" class="hover_student"><ion-icon name="lock"></ion-icon> Login</a>
    
    </div>
    
     </div>
     <br>
  

</div>
</div>
</div>
</div>
<!--Specification of our team-->


<!--our category-->
<!--removing for the testing
<div class="quick_outer_container">
<div class="inner_mobile_container1">
<div class="quick_link">
    
	<h2>Popular categories</h2>

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
         
         <li>Hobby classes</li>
         <li><a href="user_pref.php">Cooking classes</a></li>
         <li><a href="user_pref.php">Singing classes</a></li>
         <li><a href="user_pref.php">Dance classes</a></li>
         <li><a href="user_pref.php">Photography</a></li>
         <li><a href="user_pref.php">Guitar</a></li>
         <li><a href="user_pref.php">Piano</a></li>
        
     </ul>
     <ul>
         
         <li>IT couses</li>
         <li><a href="user_pref.php">Java</a></li>
         <li><a href="user_pref.php">Php</a></li>
         <li><a href="user_pref.php">Javascript</a></li>
         <li><a href="user_pref.php">Python</a></li>
         <li><a href="user_pref.php">Net framework</a></li>
     </ul>
     <ul>
         
         <li>Speaking classes</li>
         <li><a href="">Spoken english</a></li>
        <li><a href="">German language</a></li>
        <li><a href="">French language</a></li>
        <li><a href="">Spanish language</a></li>
         
     </ul>
     
 </div>
</div>
</div>
-->
<div class="container">

<div class="container_class">
      <img src="logos/account.png" height="80" width="90">
      <h3>24/7 student helping tutors</h3><br>
	  <p>All of our tutors team is dedicated to provide all day assistance</p>
      
</div>


<div class="container_class">
       <img src="logos/demo.png" height="80" width="80">
      <h3>Free 7 days demo</h3><br>
	  <p>You can take any  class for 7 days for free.If you are not satisfied you 
	  can change your tutor.</p>
	  

</div>


<div class="container_class">
      <img src="logos/whatsapp.png" height="80" width="80">
      <h3>Chat with tutors</h3><br>
	  <p>You can chat with your tutor.Every student is provided messanger number to 
		  clear doubt anytime.
	  </p>
	  

</div>
<div class="container_class">
      <img src="logos/rating.png" height="50" width="140">
      <h3>Reviews and rating from previous students</h3><br>
	  <p>We take the review of all students after 15 days of joining the classes.</p>
	 
</div>
</div>





<!-- steps to find the right tutors in your locality-->
<div class="how_outer_container">

<div class="inner_mobile_container2">

<div class="howwork">
<h2>Steps to find tutor.</h2>
	<div class="steps">
    <img src="logos/1.png" height="20%" width="20%"><br><br>
	
	<img src="logos/search.png" height="40%" width="60%"><br><br>
	<p>Search requirement in search box</p>
    </div>
    
    <div class="steps">
	<img src="logos/2.png" height="20%" width="20%"><br><br>
	<img src="logos/location.png" height="2%" width="20%" ><br><br>
	<p>Set your current location to find tutors near you</p>
    </div>
   
	<div class="steps">
	<img src="logos/3.png" height="20%" width="20%"><br><br>
	<img src="logos/rate.png" height="100%" width="80%" style="margin-bottom:35px;" ><br><br>
	<p>Check,rating,profile of teachers in search result.</p>
    </div>
    
	<div class="steps">
	<img src="logos/4.png" height="20%" width="20%"><br><br>
	<img src="logos/account.png"  height="35%" width="35%" ><br><br>
	<p>create a free account</p>
    </div>
   
	<div class="steps">
	<img src="logos/5.png" height="20%" width="20%"><br><br>
	<img src="logos/demo.png"  height="25%" width="25%"><br><br>
	<p>Start with 7 days free demo</p>
    </div>
    
</div>
</div>
</div>
<!--start of 15 days trail-->
<div class="demo_outer_container">
<div class="inner_mobile_container3">
<div class="demo">

	<div class="city" style="font-size:45px;">
		<p >5 Cities</p>
		<p style="font-size:16px;">We currenty provide our services in 5 cities.<br>
	We are expanding fast to help more students find their <br>ideal tutors.</p>
   </div>
	<div class="inner_cont_demo">
	<h2>What you are wating for?</h2><br><br>
	<a href="user_account.php"><ion-icon name="person-add" icon-size="large"></ion-icon> Create free account</a>
   </div>
<div class="city" style="font-size:45px;">
		<p >1000+ tutors</p>
		<p style="font-size:16px;">We are a team quality tutors<br>
	All are rated based on student satisfaction.<br></p>

   </div>
</div>


<!--describing the location where we are present.-->
<div class="local">
	
	<ul>
		<li><img src="images/kolkata.jpg"  height="60" width="60"><br>Kolkata</li>
		<li><img src="images/nagpur.jpg"  height="60" width="60"><br>Nagpur</li>
		<li><img src="images/ranchi.jpg"  height="60" width="60"><br>Ranchi</li>
		<li><img src="images/indiagate.jpg"  height="60" width="60"><br>Dehli</li>
		<li><img src="images/patna.jpg"  height="60" width="60"><br>Patna</li>
</ul>
	
</div>
  
</div>
</div>



<!--Tutors and student reviws-->
<div class="review_outer_container">
<div class="inner_mobile_container5">
<div class="reviews">
<div class="footer_slider_container">
<h4 style="color:#cc324b" class="foot_header">Students testimonail</h4><br><br>
  <div class="footer_slider_inner_container">
	<div class="students" style="text-align:left;padding:5%;">
        
        <img src="images/sk.jpg" height="120" width="120"><br><br>
        <p>"My name is saurabh kumar sinha.I searched a maths tutor at tutifi at got 
            rating of all the maths tutor in my locality.I am taking classes from
            last 3 months."
       </p>
       <br>
       <p><strong>
           Saurabh kumar sinha
       </strong>
      </p>
	</div>
    <div class="students" style="text-align:left;padding:5%;">
        
        <img src="logos/photo.jpeg" height="120" width="120"><br><br>
        <p>"My name is shubham kumar sinha.I searched a maths tutor at tutifi at got 
            rating of all the maths tutor in my locality.I am takinf g classes from
            last 3 months."
       </p>
       <br>
       <p><strong>
           Ranjeet jha
       </strong>
      </p>
     
	</div>
    <div class="students" style="text-align:left;padding:5%;">
        
        <img src="logos/photo.jpeg" height="120" width="120"><br><br>
        <p>"My name is shubham kumar sinha.I searched a maths tutor at tutifi at got 
            rating of all the maths tutor in my locality.I am takinf g classes from
            last 3 months."
       </p>
       <br>
       <p><strong>
           Mukesh Jain
       </strong>
      </p>
    </div>
    
    </div>
    <div class="dots_container">
          <div class="dots">
          </div>
          <div class="dots">
          </div>
          <div class="dots">
         </div>      
    </div>
    <br>
    <br>
</div>
<div class="footer_slider_container">
<h4 style="color:#cc324b" class="foot_header"> Teachers testimonial</h4><br><br>
  <div class="footer_slider_inner_container">
	<div class="teachers" style="text-align:left;padding:5%;">
  
    <img src="logos/photo.jpeg" height="120" width="120"><br><br>
        <p>"I am a science teacher at dav public school.I got a platform to increse my reach to 
            students.I feel happy in helping more number of students"
       </p>
       <br>
       <p>
           <strong>
           Babloo jha
</strong>
      </p>
	</div>
    <div class="teachers" style="text-align:left;padding:5%;">
    
    <img src="logos/photo.jpeg" height="120" width="120"><br><br>
        <p>"I am a science teacher at dav public school.I got a platform to increse my reach to 
            students.I feel happy in helping more number of students"
       </p>
       <br>
       <p>
           <strong>
           Ramesh verma
</strong>
      </p>
	</div>
    <div class="teachers" style="text-align:left;padding:5%;">
   
    <img src="logos/photo.jpeg" height="120" width="120"><br><br>
        <p>"I am a science teacher at dav public school.I got a platform to increse my reach to 
            students.I feel happy in helping more number of students"
       </p>
       <br>
       <p>
           <strong>
          Sudhir Das
    </strong>
      </p>
    </div>
   
</div>
<div class="dots_container">
          <div class="dots">
          </div>
          <div class="dots">
          </div>
          <div class="dots">
         </div>      
    </div>
<br>
<br>
   </div>	
</div>
</div>
</div>



</div>
</div>
</div>
<!--javascript part of this page is here-->

<script>
$(document).ready(function()
{
   count=0;
   var dot_count=document.getElementsByClassName("dots");
   dot_count[0].style.backgroundColor="#cc324b";
   dot_count[3].style.backgroundColor="#cc324b";
   //here is the slider 
   function slide_container()
   {
       
       
       
       count=count+1;
       count1=count+3;
       
       if(count>2)
       {
            slide_start();
            dot_count[0].style.backgroundColor="#cc324b";
            dot_count[2].style.backgroundColor="#cccccc";
            dot_count[3].style.backgroundColor="#cc324b";
            dot_count[5].style.backgroundColor="#cccccc";
       }
       else
       {
      
       
       $(".footer_slider_inner_container").animate({
           left:"-=100%",
       },function()
       {
           //still to call the function after the completion of the animation
           dot_count[count-1].style.backgroundColor="#cccccc";
           dot_count[count].style.backgroundColor="#cc324b";
           dot_count[count1-1].style.backgroundColor="#cccccc";
           dot_count[count1].style.backgroundColor="#cc324b";

       })
       }

   }
   //here we are moving back the slider to intial position
   function slide_start()
   {
       
       $(".footer_slider_inner_container").css("left","0px");
       count=0;
       
   }

   setInterval(slide_container,4000);

});

</script>
<!--javascript part of this page is ends here-->
<?php
include 'footer.php'
?>



















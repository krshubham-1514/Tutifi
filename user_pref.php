
<!doctype html>
<head>
  <title>
</title>
<meta name="viewport" content="width=device-width,intial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="user_pref.css">
<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.min.structure.css">
<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.min.theme.css">
<link rel="stylesheet" type="text/css" href="search.css">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Oswald|Questrial|Raleway|Roboto|Ubuntu" rel="stylesheet">  
<body>

   


<div class="page_container_pref">
<img src="logos/progres1.png" id="image_user">

  <div class="page_inner_container_pref">
  
   <form action="search.php" method="post">
     <div id="first_page">
   <div class="user_class">
   <span><h4>Select  class</h4></span>
   <span id="class_warn" style="color:red;font-size:14px;"></span>
     <select name="class_user" id="class_user" required>
         <option value="" selected disabled>SELECT YOUR CLASS</option>
         <option value="10">Nursery & KG</option>
         <option value="11">Class I</option>
         <option value="12">Class II</option>   
         <option value="13">Class III</option>   
         <option value="14">Class IV</option>                  
         <option value="15">Class V</option>  
         <option value="16">Class VI</option>  
         <option value="17">Class VII</option>  
         <option value="18">Class VIII</option>   
         <option value="19">Class IX</option>  
         <option value="20">Class X</option>  
         <option value="21">Class XI</option>   
         <option value="22">Class XII</option>      
      </select>
   </div>





    <div class="user_board">
    <h4>Select your education board</h4>
    <span id="board_warn" style="color:red;font-size:14px;">**in case of state board select state</span><br>
   <br> <span id="hide">
     <div id="change_align">
    <br><input type="radio" id="test3" value="400" class="check" name="board_user" checked>
    <label for="test3">CBSE</label>&nbsp&nbsp
    <input type="radio" id="test4" value="404"  class="check" name="board_user">
    <label for="test4">ICSE</label>&nbsp&nbsp
    <input type="radio" id="test5" value="402"  class="check" name="board_user">
    <label for="test5">IB</label>&nbsp&nbsp
    <input type="radio" id="test6" value="403"  class="check" name="board_user">
    <label for="test6">IGCSE</label>&nbsp&nbsp
   
    <input type="radio" id="test22" value="401"  class="check" name="board_user">
    <label for="test22">NIOS</label>&nbsp&nbsp
    </span>
    <input type="radio" id="test7" value="state"  name="board_user">
    <label for="test7" id="state">STATE</label>
</div>
    <br>
    <br>
    <div id="board_cat">
<select name="board" id="board_user">
<option value="">Select state </option>	
<option value="405">	Andhra Pradesh</option>	
<option value="406">	Arunachal Pradesh	</option>	
<option value="407">	Assam	</option>	
<option value="408">Bihar</option>		
<option value="409">	Chhattisgarh	</option>	
<option value="410">	Goa	</option>	
<option value="411">	Gujarat	</option>	
<option value="412">	Haryana	</option>	
<option value="413">	Himachal Pradesh</option>		
<option value="414">	Jammu and Kashmir	</option>	
<option value="415">	Jharkhand	</option>	
<option value="416">	Karnataka	</option>	
<option value="417">	Kerala	</option>	
<option value="418">	Madhya Pradesh</option>		
<option value="419">	Maharashtra	</option>	
<option value="420">	Manipur	</option>	
<option value="421">	Meghalaya	</option>	
<option value="422">	Mizoram	</option>	
<option value="423">	Nagaland	</option>	
<option value="424">	Odisha	</option>	
<option value="425">	Punjab	</option>	
<option value="426">	Rajasthan	</option>	
<option value="427">	Sikkim	</option>	
<option value="428">	Tamil Nadu	</option>	
<option value="429">	Telangana	</option>	
<option value="430">	Tripura	</option>	
<option value="431">	Uttar Pradesh	</option>	
<option value="432">	Uttarakhand </option>	
<option value="433">	West Bengal	</option>	
   
</select>

  </div>
   </div>



   <div>
   <h4>Select subjects</h4><br>
   <span id="subject_warn" style="color:red;font-size:14px;"></span>
   <select name="subject" id="subject">
   <option value="" selected disabled>Select subject</option>
   <option value="101">All subjects(of my selected class)</option>
   <option value="102">Maths</option>
   <option value="103">English</option>
   <option value="104">Science</option>
   <option value="105">Physics</option>
   <option value="106">Chemistry</option>
   <option value="107">Biology</option>
   <option value="108">Social studies</option>
   <option value="109">Hindi</option>
   </select>
   </div>



    <br>
    <br>  
   <input type="button" name='' id="btn1" value="Continue to next step"  style="width:200px;height:48px;background-color:#cc324b;border:0;cursor:pointer;color:white;border-radius:3px;">
<br>
<br>
<br>
</div>
<div id="second_page">


<div class="mode">
   <h4>Select your tution type</h4>
   <ul style="font-size:14px;list-style:none;"><li>Home tution (means tutor will visit your home)</li>
   <li>Group tution (you have to go tutor home or institute place)</li>
   </ul>
 
    <input type="radio" id="test1" value="HOME" name="mode" checked>
    <label for="test1">Home</label>
     &nbsp
     &nbsp
     
 
    <input type="radio" id="test2" value="GROUP" name="mode">
    <label for="test2">Group</label>
    &nbsp
    &nbsp
  
    
</div>
<br>
<div class="time">
   <h4>Select your prefered time slot</h4><br>
    <input type="radio" id="test11" value="200" name="time" checked>
    <label for="test11">6:00-8:00 am</label>
     &nbsp
     &nbsp
     <br>
     <br>
    <input type="radio" id="test10" value="201" name="time">
    <label for="test10">2:00-4:00 pm</label>
     &nbsp
     &nbsp
     <br>
     <br>
    <input type="radio" id="test8" value="202" name="time">
    <label for="test8">4:00-6:00 pm</label>
    &nbsp
    &nbsp
    <br>
    <br>
    <input type="radio" id="test9" value="203"  name="time">
    <label for="test9">6:00-8:00 pm</label>
    &nbsp
    &nbsp
    
</div>
<br>
<input type="button" name='' id="btn2" value="Continue to next step"  style="width:200px;height:48px;background-color:#cc324b;border:0;cursor:pointer;color:white;border-radius:3px;">

</div>

<div id="page_three">
  <label><h2>Enter Your Area Pincode</h2></label>
  
  <p style="font-size:16px;color:#575757;">(ensure your area pincode is correct)</p>
  <p id="pincode_warn" style="Color:red;"></p>
  <input type="text"  name="pincode" value="" placeholder="Area pincode" class="pin_user_pref" id="pincode"><br>
<br>
<br>
  <input type="submit" name="submit" id="btn3" value="Find tutors" style="width:150px;height:48px;background-color:#cc324b;border:0;cursor:pointer;color:white;border-radius:3px;">
</form>

</div>
</div> 
</div>
<script src="jquery-3.3.1.js"></script>
<script src="jqueryui/jqueryui.js"></script>
<script>
$(document).ready(function()
{
    $("#class_user").selectmenu({width:'auto'});
   $("#board_user").selectmenu({width:'auto'});
   $("#subject").selectmenu({width:'auto'});
   
});
</script>
<script>
$(document).ready(function()
{

    $("#state").click(function()
        {
          
              $("#board_cat").css("display","block");
              
           
        });
        $(".check").click(function()
        {
          
          
              $("#board_cat").css("display","none");
           
        });


   $("#btn1").click(function()
     {
       
        var class_user=document.getElementById("class_user");
        if(class_user.value.length==0)
        {
          document.getElementById("class_warn").innerHTML="**Please select your class<br>";
          
          
          return false;
        }
        //checking of the fields in the form to validate the user data fill
        var subject=document.getElementById("subject");
        if(subject.value.length==0)
        {
          document.getElementById("subject_warn").innerHTML="**Please select subject<br>";
          
          return false;
        }

        //checking that any state board has been selected or not
        
      
        //==========================================================
       $(".page_inner_container_pref").animate({
         top:"-=860"
       },100,)
       $("#image_user").attr("src","logos/progress2.png");

     })
     $("#btn2").click(function()
     {
       
      
       $(".page_inner_container_pref").animate({
         top:"-=815"
       },100)
       $("#image_user").attr("src","logos/progress3.png");
       $(".page_container_pref").css("height","380");
       

     })
     $("#btn3").click(function()
     {
       
        var pincode=document.getElementById("pincode");
        if(pincode.value.length<6)
        {
          document.getElementById("pincode_warn").innerHTML="**Please enter 6 digit area pincode";
          pincode.focus();
          pincode.style.border="1px solid red";
          return false;
        }
       
       
     })


     
 

});
</script>
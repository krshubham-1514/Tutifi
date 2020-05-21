<?php
include 'pdodb.php';
session_start();
//checking user session verification
if(isset($_SESSION['tut_acc']))
{
  $tut_mob=$_SESSION['tut_acc'];

  
  
}
else
{
  die();
}

//checking of the user session ends here
if(isset($_POST['submit']))
{
    $institute=$_POST['institute'];
    $exper=$_POST['experiece'];
    $pincode=$_POST['pin'];
    $age=$_POST['age'];
    $addhar_no=$_POST['adhar'];
    $cadd=$_POST['compaddd'];
    $gender=$_POST['gender'];
    
    $arr=array($institute,$exper,$pincode,$age,$gender,$cadd,$addhar_no,$tut_mob);
    $query="UPDATE tuts_profile SET tut_inst_name=?,experience=?,pincode=?,age=?,gender=?,addr=?,addhar_no=? WHERE  tut_mob=?";
    $stmt=$conn->prepare($query);
    if($stmt->execute($arr))
    {
        header("Location:tut_det.php");
    }
    else
    {
        $_SESSION['msg']='your database has not been updated';
    }

}
?>
<!doctype html>
<html>
<head>
    <title>
    </title>
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="tutor_form.css">
<link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Oswald|Questrial|Raleway|Roboto|Ubuntu" rel="stylesheet"> 
<body>
<div class="page_container">
<div  class="form_container">
<div class="alert alert-danger" id="message">
    <strong><?php 
    
    if(isset($_SESSION['msg']))
    {
      echo "<script>
      document.getElementById('message').style.display='block';
      </script>";
      echo $_SESSION['msg']; 
    
  }
    ?></strong>
  </div>
  
<ul class="tutor_form">
<div style="border-bottom:2px solid #cc324b;color:#cc324b;">
<h2  >Become a tutor and grow your reach to students.</h2><br>
<p>Join the team of 1000+ tutors</p>
<br>
</div>

<br>
  <form action="" method="post">
<li>
   <p style="color:#7f7f7f;">Institute Name(optional)</p>
   <input type="text" name="institute" placeholder="" value="" >
</li>
<li>
  <p style="color:#7f7f7f;">Experience(example: 5)<span style="color:#cc324b;">*</span></p>
  <p id="exp_warn" style="color:red;font-size:14px;";></p>
   <input type="text" name="experiece" id="exp" placeholder="" style="width:200px" value="" required>
  
</li>
<!--here we are asking for the adhar number from the user-->
<li>
  <p style="color:#7f7f7f;">Aadhar Number<span style="color:#cc324b;">*</span></p>
  <p id="aadhar_warn" style="color:red;font-size:14px;";></p>
   <input type="text" name="adhar" id="adhar" placeholder="" style="width:200px" value="" required>
  
</li>
<!--addhar secion ends here-->
<li>
   <p style="color:#7f7f7f;">Area Pincode<span style="color:#cc324b;">*</span></p>
   <p id="pin_warn" style="color:red;font-size:14px;";></p>
   <input type="text" name="pin" id="pin" placeholder="" value="" style="width:200px"; required>

 </li>
<li>
  <p style="color:#7f7f7f;">Age<span style="color:#cc324b;">*</span></p>
  <p id="age_warn" style="color:red;font-size:14px;";></p>
   <input type="text" name="age" id="age" placeholder="" value="" style="width:200px" required>
   
</li>
<li>
   <p style="color:#7f7f7f;">Gender<span style="color:#cc324b;">*</span></p><br>
   <input type="radio" id="test12" value="Male" name="gender" checked>
    <label for="test12">Male</label>
    &nbsp&nbsp&nbsp
    <input type="radio" id="test13" value="Female" name="gender">
    <label for="test13">Female</label>
</li>

<li>
   <p style="color:#7f7f7f;">Complete Address<span style="color:#cc324b;" required>*</span></p>
   <p id="add_warn" style="color:red;font-size:14px;";></p>
   <textarea rows="5" cols="35" name="compaddd" id="add">
   </textarea>
</li>
<li>
    <input type="submit" name="submit" value="continue" onclick="return form_val()" style="width:100px;background-color:#cc324b;border:0;color:white;cursor:pointer;">
</li>


</ul> 
</form>

</div>
 
<div class="help_tutors">
    <ul>
    <div style="border-bottom:2px solid #cc324b;color:#cc324b;">
    <li><h2>Need help ?</h2></li>
    <li><p>FAQ(Frequently asked question)</p></li>
    </div>
    <li><a href="">Is Institute name is campolsury?</a></li>
    <li><a href="">Is any minimum experience needed to be tutor?</a></li>
    <li><a href="">Is Institute name is campolsury?</a></li>
    <li><a href="">Is any minimum experience needed to be tutor?</a></li>
    <li><a href="">Read more.......</a></li>
    <div style="border-bottom:2px solid #cc324b;color:#cc324b;">
    
    <li>Call us:</li>
    
    <li style="color:#575757;">+91 1234567856</li>
    </div>
    <div style="border-bottom:2px solid #cc324b;color:#cc324b;">
    <li>Mail us:</li>
   
    
    <li style="color:#575757;">contactus@tutifi.com</li>
    </div>
</div>
<script>
//script part and validation  of the forms is here
function form_val()
{
var exp=document.getElementById("exp").value;
var pin=document.getElementById("pin").value;
var age=document.getElementById("age").value;
var add=document.getElementById("add").value;
var aadhar=document.getElementById("adhar").value;


if(isNaN(exp))
{
   document.getElementById("exp_warn").innerHTML="'Experience' field should not contain characters!";
   return false;

}
if(!isNaN(exp))
{
    if(exp.length>2)
    {
        document.getElementById("exp_warn").innerHTML="Experience detail is INVALID!";   
    }
    else
    {
        document.getElementById("exp_warn").innerHTML="";
    }
}
if(isNaN(pin))
{
    document.getElementById("pin_warn").innerHTML="'pincode' should be number not characters!";
    return false;
}
if(!isNaN(pin))
{
 if(pin.length>0 && pin.length<6)
  {
    document.getElementById("pin_warn").innerHTML="Pincode should be  have 6 digits!"
    return false;
   }
  else
  {
    document.getElementById("pin_warn").innerHTML="";
  }

}

if(isNaN(age))
{
   document.getElementById("age_warn").innerHTML="'Age' should be number number not charcaters!"
   return false;
}
if(add.length<20)
{
    document.getElementById("add_warn").innerHTML="Please enter your complete address!"
   return false;
}

//here is the validation code for the addhar form

if(isNaN(aadhar))
{
    document.getElementById("aadhar_warn").innerHTML="'aadhar number' should be number not characters!";
    return false;
}
if(!isNaN(aadhar))
{
 if(aadhar.length!=12)
  {
    document.getElementById("aadhar_warn").innerHTML="Aadhar no  should be  have 12 digits!"
    return false;
   }
  else
  {
    document.getElementById("aadhar_warn").innerHTML="";
  }

}


}

</script>


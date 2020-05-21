<?php 
session_start();
require 'mysqlidb.php';
if(isset($_POST['submit']))
{
  //collecting all the form data here.

  $name=mysqli_real_escape_string($conn,$_POST['firstname']);
  $password=password_hash($_POST['password1'],PASSWORD_BCRYPT);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $mobile=mysqli_real_escape_string($conn,$_POST['tele']);
  $user_add=mysqli_real_escape_string($conn,$_POST['addr_user']);
  $token="WJLKDKJSFSMSMAUTSDEEW6546546%#@%54DFGhajhkfjhd%#akhfawhuei5@#946464hnknsfdkurewhorero";
  $token=str_shuffle($token);
  $token=substr($token,0,5);
  $token=password_hash($token,PASSWORD_BCRYPT);
  $active=0;
  $query="SELECT * FROM user_student WHERE user_mob='$mobile'";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_array($result);
  if(mysqli_num_rows($result)>0 && $row['active']==1)//checking that no previous account from the same number.
  {
    $_SESSION['msg']="There is already a account with this number";
    
  }
  elseif(mysqli_num_rows($result)>0 && $row['active']==0)
  {

    //here we are updating the account which has been already exist but not verified

    if($_POST['password1']==$_POST['password2'])//checking that the two entered password matches.
    {
    $query_1="UPDATE  user_student 
        SET username='$name',
        user_pass='$password',
        token_email='$token',
        active='$active',
        email='$email',
        addr='$user_add'
        WHERE user_mob='$mobile'";
    if(mysqli_query($conn,$query_1))//starting the query
    {
        
        
        $otp=mt_rand(100000,999999);
        $otp1=str_shuffle($otp);
       //send sms to enter number of the user
  
        
        $otp=password_hash($otp1,PASSWORD_BCRYPT);
        $query_2="UPDATE user_student SET token_otp='$otp' WHERE user_mob=$mobile";
  
         
        if(mysqli_query($conn,$query_2))
        {
          
          
          // Authorisation details.
    $username = "contactbj969@gmail.com";
    $hash = "5dd4e77aee73e918276167d4f2b0c798f15547e0b480a80fe8f2e0ce7ed3debc";
  
    // Config variables. Consult http://api.textlocal.in/docs for more info.
    $test = "0";
  
    // Data for text message. This is the text message data.
    $sender = "TUTIFI"; // This is who the message appears to be from.
    $numbers = "$mobile"; // A single number or a comma-seperated list of numbers
    $message = "Your tutifi verification code is $otp1";
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    $ch = curl_init('http://api.textlocal.in/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); 
    if($result==true)
    {
      $_SESSION['user_acc']=$mobile;
      header("Location:verify_mob_user.php");
    }
    else
    {
      $_SESSION['msg']='Please enter valid mobile number'; 
    }
    curl_close($ch);
          
        }
        
        
    }
    else
    {
      $_SESSION['msg']='some error in data entered';
    }
    }
    else
    {
       $_SESSION['msg']='please enter matching password' ;
    }
    
  }
  else
  {
  
  if($_POST['password1']==$_POST['password2'])//checking that the two entered password matches.
  {
  $query="INSERT INTO user_student (username,user_pass,user_mob,token_email,active,email,addr) VALUES ('$name','$password','$mobile','$token','$active','$email','$user_add')";
  if(mysqli_query($conn,$query))//starting the query
  {
      
      
      $otp=mt_rand(100000,999999);
      $otp1=str_shuffle($otp);
     //send sms to enter number of the user

      
      $otp=password_hash($otp1,PASSWORD_BCRYPT);
      $query_2="UPDATE user_student SET token_otp='$otp' WHERE user_mob=$mobile";

       
      if(mysqli_query($conn,$query_2))
      {
        
        
      	// Authorisation details.
	$username = "contactbj969@gmail.com";
	$hash = "5dd4e77aee73e918276167d4f2b0c798f15547e0b480a80fe8f2e0ce7ed3debc";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TUTIFI"; // This is who the message appears to be from.
	$numbers = "$mobile"; // A single number or a comma-seperated list of numbers
	$message = "Your tutifi verification code is $otp1";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); 
  if($result==true)
  {
    $_SESSION['user_tut_info_acc']=$mobile;
    header("Location:user_post_mobile_ver.php?otp=$otp1");
  }
  else
  {
    $_SESSION['msg']='Please enter valid mobile number'; 
  }
	curl_close($ch);
        
      }
      
      
  }
  else
  {
	  $_SESSION['msg']='some error in data entered';
  }
  }
  else
  {
	   $_SESSION['msg']='please enter matching password' ;
  }
  }


}


?>


<!doctype html>
	<html>
	<head>
	<title> 
	</title>
  <meta name="viewport" content="width=device-width,intial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet">	
    <style>
      #message{
        display:none;
        widht:50%;
        margin:0 auto;
      }
   </style>
	</head>
 

	
<body>
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
	<form  action="" method="post" id="form">
	<ul>
	<li><h3>Create Account</h3></li>
    
	<li><input type="text" name="firstname" value="" minlenght=5 placeholder=" Your name" id="username" required ><br></li>
	
	<li><input type="password" name="password1" value="" placeholder=" Password" id="password1" required ><br></li>
	
	<li><input type="password" name="password2" value="" placeholder=" Re-enter Password" id="password2" required ><br></li>
    <li><input type="email" name="email" value="" placeholder=" Email" id="email" required ><br></li>
  <li><input type="tel" name="tele" value="" placeholder=" Mobile no." id="mob" required ><br></li>
  <li><textarea cols="40" placeholder="Complete Address" name="addr_user" required></textarea><br></li>
	<li><input type="submit" name="submit" value="Continue" onclick="return check();" style="background-color:#cc324b;border:0;color:white;" id="btn"><br></li>
	 <li><p>Already have a account?</p><a href="user_post_login.php">Login</a></li>
	</ul>
	</form>
</body>


<!--script part of the page-->
<script>
function check()
{
  
  var box1=document.getElementById("username");
  var box2=document.getElementById("password1");
  var box3=document.getElementById("Password");
  var box4=document.getElementById("email");
  var box5=document.getElementById("mob");
  //setting the minum length 
  if(box2.value.length<=4)
  {
   
      alert("password should have atleast 5 characters");
      return false;
  }
  else if(box5.value.length !=10)
  {
    alert("Please enter your 10 digit mobile number");
    return false;
  }
}


</script>

<?php
unset($_SESSION['msg']);  
?>
</html>
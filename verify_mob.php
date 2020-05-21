<?php
include 'pdodb.php';
session_start();
if(isset($_SESSION['tut_acc']))
{
  $mobile=$_SESSION['tut_acc'];
  $_SESSION['msg']='A 6 digit OTP has been sent to '.$mobile;
  
  
}
else
{
  die();
}
if(isset($_POST['submit']))
{ 
  $otp_user=$_POST['otp'];
  $query="SELECT token_otp FROM tuts_profile WHERE tut_mob=?";
  $stmt=$conn->prepare($query);
 
  if($stmt->execute([$mobile]))
  {
   
    
      if($row=$stmt->fetch(PDO::FETCH_ASSOC))
      {
        $otpdb=$row['token_otp'];
       
        if(password_verify($otp_user,$otpdb))
        {
          $query_2="UPDATE tuts_profile SET active='1' WHERE tut_mob=?";
          $stmt2=$conn->prepare($query_2);
          if($stmt2->execute([$mobile]))
          {
            //removing otp from the database
            $query_3="UPDATE tuts_profile SET token_otp='' WHERE tut_mob=?";
            $stmt3=$conn->prepare($query_3);
            if($stmt3->execute([$mobile]))
            {
             unset($_SESSION['msg']);
             unset($_SESSION['resend_msg_tut']);
             header("Location:tutor_form.php");
            }
          }

        }
        else
        {
          $_SESSION['msg']='INVALID OTP!';
        }
      }
  }

  
  
}

//here is the code for the user not get the otp
//===================================================================
if(isset($_POST['resend_tut']))
{
    $mobile_no=$mobile;
    $query="SELECT count(*) FROM tuts_profile WHERE tut_mob=?";
    $stmt=$conn->prepare($query);
    $stmt->execute([$mobile_no]);
    $count=$stmt->fetchColumn();
    if($count>0)
    {
        $otp=mt_rand(100000,999999);
        $otp1=str_shuffle($otp);
     //send sms to enter number of the user
      $otp_f=password_hash($otp1,PASSWORD_BCRYPT);
      $query_2="UPDATE tuts_profile SET token_otp='$otp_f' WHERE tut_mob=?";
     
      $stmt=$conn->prepare($query_2);
      if($stmt->execute([$mobile_no]))
      {
        $username = "contactbj969@gmail.com";
        $hash = "5dd4e77aee73e918276167d4f2b0c798f15547e0b480a80fe8f2e0ce7ed3debc";
    
        // Config variables. Consult http://api.textlocal.in/docs for more info.
        $test = "0";
    
        // Data for text message. This is the text message data.
        $sender = "TUTIFI"; // This is who the message appears to be from.
        $numbers = "$mobile_no"; // A single number or a comma-seperated list of numbers
        $message = "Your tutifi verification code is $otp1";
        // 612 chars or less
        // A single number or a comma-seperated list of numbers
        $message = urlencode($message);
        $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
        $ch = curl_init('http://api.textlocal.in/send/?');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch); // This is the result from the API
        if($result==true)
        {
            $_SESSION['resend_msg_tut']="OTP resended to $mobile_no";
        }
        else
        {
             echo "please enter valid mobile number.";
        }
     }

      
    }
}
//here is the end of the code for the otp send
//======================================================================================

?>


<!doctype html>
<head>
<title>
</title>
<style>
      #message{
        display:none;
        
      }
   </style>
   <meta name="viewport" content="width=device-width,intial-scale=1.0">
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet">
<body>
<div class="alert alert-danger" id="message">
    <strong><?php if(isset($_SESSION['msg']))
    {
      echo "<script>
      document.getElementById('message').style.display='block';
      
      </script>";
      echo $_SESSION['msg']; 
    }
    ?></strong>
  </div>
<form action="" method="post" id="form">
  <ul>
 
  <br>Please enter OTP below:</p></li>
  <li><input type="text" value="" name="otp" placeholder="Enter 6 digit OTP"></li>
  
  <li><input type="submit" name="submit" value="Verify"  style="background-color:#cc324b;border:0;color:white;" id="btn"><br></li>
  </ul>
<br>

  <div class="resend" style="border-top:1px solid #ededed;text-align:center;">
 <br>
 <p>Didn't get OTP?</p>

  <p style="color:green;"><strong><?php if(isset($_SESSION['resend_msg_tut'])){
       echo $_SESSION['resend_msg_tut'];
  } ?></strong></p>
 <input type="submit" name="resend_tut" value="Resend OTP" style="background-color:#575757;border:0;color:white;width:45%;cursor:pointer;">
</div>
<br>
<br>
</form>

</body>
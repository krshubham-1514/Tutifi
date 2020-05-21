<?php
require 'pdodb.php';
session_start();
if(isset($_POST['submit_mob']))
{
    $mobile_no=$_POST['mobile_no'];
    $query="SELECT count(*) FROM user_student WHERE user_mob=?";
    $stmt=$conn->prepare($query);
    $stmt->execute([$mobile_no]);
    $count=$stmt->fetchColumn();
    if($count>0)
    {
        $otp=mt_rand(100000,999999);
        $otp1=str_shuffle($otp);
     //send sms to enter number of the user
      $otp_f=password_hash($otp1,PASSWORD_BCRYPT);
      $query_2="UPDATE user_student SET token_otp='$otp_f' WHERE user_mob=?";
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
            $_SESSION['forget_user']=$mobile_no;
            header("Location:forget_verify.php");
        }
        else
        {
             echo "please enter valid mobile number.";
        }
     }

      
    }
    else
    {
        echo "no account registered with this mobile number";
    }


    
}
//here is the php to change the password of the user
?>

<div class="form_pass_upd" style="text-align:center;font-family:Raleway;color:#575757">

<form action="" method="post" id="form" style="padding:3%">
<h2>Enter mobile number</h2><br>
<p style="text-align:center;font-size:14px;color:red;">A 6 digit OTP will be sent to your number.</p>
 <input type="text" name="mobile_no" placeholder=" Mobile Number" style="width:75%;" required>
<br><br>
 <input type="submit" name="submit_mob" value="Send OTP" style="background-color:#cc324b;border:0;color:white;width:75%;cursor:pointer;">

</form>


</div>

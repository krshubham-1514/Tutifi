<?php
session_start();
require 'pdodb.php';
if(isset($_SESSION['forget_user']))
{
   
}
else
{
    die();
}
if(isset($_POST['submit_otp']))
{
    if(isset($_SESSION['forget_user']))
    {
       $mobile=$_SESSION['forget_user'];
       $query_3="SELECT token_otp FROM user_student WHERE user_mob=?";
       $stmt=$conn->prepare($query_3);
       if($stmt->execute([$mobile]))
       {
             if($row=$stmt->fetch(PDO::FETCH_ASSOC))
             {
                 $user_otp=$_POST['otp_no'];
                 $db_token=$row['token_otp'];
                 if(password_verify($user_otp,$db_token))
                 {
                    
                     unset($_SESSION['resend_msg']);
                     header("Location:confirm_new_pass_user.php");
                 }
              
             }
            
       }
      
    }
    else
    {
      die("");
    }
}
//here is the code for the resend of the otp to the user

if(isset($_POST['resend']))
{
    $mobile_no=$_SESSION['forget_user'];
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
            $_SESSION['resend_msg']="OTP resended to $mobile_no";
        }
        else
        {
             echo "please enter valid mobile number.";
        }
     }

      
    }
}
    //forgot password code for the user end here
    //==========================================================
?>
<div class="form_ver" style="text-align:center;font-family:roboto;">
<form action="" method="post" id="form" style="padding:3%">

<h2>Enter 6 digit OTP</h2><br>
<p style="text-align:center;font-size:14px;color:green;" id="change"><strong> OTP has been sent to <?php echo $_SESSION['forget_user']?>.</strong></p>
 <input type="text" name="otp_no" placeholder=" 6 digit OTP" style="width:75%;" id="otp">
<br>


<br>

 <input type="submit" name="submit_otp" value="Verify OTP"  onclick="return checkotp()" style="background-color:#cc324b;border:0;color:white;width:75%;cursor:pointer;">
 <br>
 <br>

 <!--resend otp section of this page is here-->

 
 <div class="resend" style="border-top:1px solid #ededed;">
 <br>
 <p>Didn't get OTP?</p>
 <br>
  <p style="color:green;"><strong><?php if(isset($_SESSION['resend_msg'])){
       echo $_SESSION['resend_msg'];
  } ?></strong></p>
 <input type="submit" name="resend" value="Resend OTP" style="background-color:#575757;border:0;color:white;width:45%;cursor:pointer;">
</div>


</form>




</div>

<!--script part of this page here-->
<script>
function checkotp()
{
    var otp=document.getElementById("otp").value;
    if(otp.length<6)
    {
        var msg=document.getElementById("change").innerHTML="Please enter 6 digit OTP.";
        return false;
    }
}



</script>
</body>
</html>
<?php
session_start();
include 'pdodb.php';

if(isset($_SESSION['forget_user']))
{
    
}
else
{
    die();
}

if(isset($_POST['submit']))
{
    
    $new_pass=$_POST['pass'];
    $con_pass=$_POST['conpass'];
    $mobile=$_SESSION['forget_user'];
    if($new_pass==$con_pass)
    {
        $pass_hash=password_hash($new_pass,PASSWORD_BCRYPT);
        $query="UPDATE user_student SET user_pass=? WHERE user_mob=?";
        $stmt=$conn->prepare($query);
        if($stmt->execute([$pass_hash,$mobile]))
        {
           
            session_destroy();
            header("Location:succ_forget_pass_user.php");
        }
    }
    else
    {
       echo "your password do not match";
    }
}
?>
<div class="password" style="text-align:center;font-family:roboto;color:#575757">

    <form action="" method="post" id="form" style="padding:3%">
        <h2>Change Password</h2><br>
        <ul>
            <li style="position:relative;">
        <input type="password" name="pass" value="" id="password1" placeholder=" New Password" style="width:90%;"><ion-icon name="eye" id="password_show_1" onclick="show_hide_1()" style="position:absolute;top:50%;left:87%;cursor:pointer;"></ion-icon></li>
        <li style="position:relative;"><input type="password"  id="password2" name="conpass" value="" placeholder=" Confirm Password" style="width:90%;" ><ion-icon name="eye" id="password_show_2" onclick="show_hide_2()" style="position:absolute;top:50%;left:87%;cursor:pointer;"></ion-icon></li>
        <li><input type="submit" name="submit" value="continue" style="background-color:#cc324b;border:0;color:white;width:75%;cursor:pointer;"></li>
</ul>
    </form>

</div>
<!--script for the show and hide password starts here-->
<script>
var pwshow_1=0;
var pwshow_2=0;
//for the first eye button
function show_1()
{
  var password_1=document.getElementById("password1");
  password_1.setAttribute('type', 'text');
  var target_change_1=document.getElementById("password_show_1");
  target_change_1.setAttribute('name','eye-off');


}
function hide_1()
{
  var password_1=document.getElementById("password1");
  password_1.setAttribute('type', 'password');
  var target_change_1=document.getElementById("password_show_1");
  target_change_1.setAttribute('name','eye');
  
}
//for the second eye button
function show_2()
{
  var password_2=document.getElementById("password2");
  password_2.setAttribute('type','text');
  var target_change_2=document.getElementById("password_show_2");
  target_change_2.setAttribute('name','eye-off');

}
function hide_2()
{
  var password_2=document.getElementById("password2");
  password_2.setAttribute('type','password');
  var target_change_2=document.getElementById("password_show_2");
  target_change_2.setAttribute('name','eye');
}
function show_hide_1()
{

  if(pwshow_1== 0)
  {
      pwshow_1=1;
      show_1();
  }
  else
  {
      pwshow_1=0;
      hide_1();
  }

}
function show_hide_2()
{
  if(pwshow_2== 0)
  {
      pwshow_2=1;
      show_2();
  }
  else
  {
      pwshow_2=0;
      hide_2();
  }
}

</script>
<!--script for the show and hide password ends here-->
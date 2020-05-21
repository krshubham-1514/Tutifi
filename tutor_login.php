<?php
session_start();
require 'pdodb.php';
if(isset($_SESSION['user_logged']))
{
	die("your have already logged.");
}
if(isset($_POST['submit']))
{
 $type='tutor';
 $mobile=$_POST['mobile'];
 $user_pass=$_POST['pass'];
 $query="SELECT tut_pass,active FROM tuts_profile WHERE tut_mob=?";
 $stmt=$conn->prepare($query);
 if($stmt->execute([$mobile]))
 {
	if($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		if($row['active']==1)
		{
			$pass_db=$row['tut_pass'];
			if(password_verify($user_pass,$pass_db))
			{
				$_SESSION['tutor_logged']=$mobile;
				$_SESSION['type']=$type;
				header("Location:index.php");
			}
			else
			{
				echo "Incorrect password";
			}
		
		
	     }
	 
	 
 }
 else
 {
	  $_SESSION['msg']="There was a problem We cannot find an account with that email address";
 }

}
}

?>
<!doctype html>
   <head>
   <meta name="viewport" content="width=device-width,intial-scale=1.0">
	   <title>
	   </title>
   </head>
   
   <link rel="stylesheet" type="text/css" href="form.css">
   <link href="https:fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet">
   <link href="https:fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet">
<body>
	<div class="msg">
	<?php
	  if(isset($_SESSION['msg']))
	  {
		  echo $_SESSION['msg'];
	  }
	  ?>
	</div> 
	 
	<form action="" method="post" id="form">
		<ul>
		<li><h2>Tutor's Login</h2></li>
		<li><input type="text" name="mobile" placeholder=" Registered mobile Number" required></li><br>
		<li style="position:relative;"><input type="password" name="pass" id="password1" placeholder=" Password" required><ion-icon name="eye" id="password_show_1" onclick="show_hide_1()" style="position:absolute;top:50%;left:87%;cursor:pointer;"></ion-icon></li><br>
		<li><input type="submit" name="submit" value="Login" style="background-color:#cc324b;border:0;color:white;"></li><br>
		
		</ul>
		<div class="new_account" style="font-family: 'Tajawal', sans-serif;color:#474747;text-align:center;border-top:1px solid #ededed;">
		<br>
		<br>
	   <h2>NEW USER?</h2><br>
	   <p style="font-size:16px;">Create a profile for free.</p><br>
	   <a href="tut_account.php" style="background-color:#cc324b;padding:3%;border:0;border-radius:3px;color:white;text-decoration:none;">Create profile</a>
       </div>
	   <br>
	   <br>
	</form>
	
</body>
<!--script for the show and hide password starts here-->
<script>
var pwshow_1=0;

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
</script>
</html>

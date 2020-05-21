<?php
session_start();
require 'pdodb.php';
$_SESSION['tut_id']=$_GET['tut_id'];
//here we are checking the user has already logged in or not
if(isset($_SESSION['user_logged']))
{
	$_SESSION['tut_id']=$_GET['tut_id'];
	header("Location:tut_contact.php");

}

  

//here we are geting getting the url through the session


if(isset($_POST['submit']))
{
 
 $mobile=$_POST['mobile'];
 $user_pass=$_POST['pass'];
 $query="SELECT user_pass,active FROM user_student WHERE user_mob=?";
 $stmt=$conn->prepare($query);
 if($stmt->execute([$mobile]))
 {
	if($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		if($row['active']==1)
		{
			$pass_db=$row['user_pass'];
			if(password_verify($user_pass,$pass_db))
			{
               
				$_SESSION['user_logged']=$mobile;
				$_SESSSION['type']=1;
                header("Location:tut_contact.php");
			}
			else
			{
				echo "Incorrect password";
			}
		
		
	     }
	 
	 
 }
 else
 {
	  $_SESSION['msg']="There was a problem We cannot find an account with that mobile number";
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
        <h4 style="font-family:roboto;padding:2%;background-color:#3cb371;color:white;border-radius:3px;" id="login_msg">Login / Create a free  account  to continue.</h4>
        <br>
		<li><h2>Login</h2></li>
		<li><input type="text" name="mobile" placeholder=" Registered mobile Number" required></li><br>
		<li><input type="password" name="pass" placeholder=" Password" required></li><br>
		<li><input type="submit" name="submit" value="Login" style="background-color:#cc324b;border:0;color:white;"></li><br>
		<li><a href="forgot_pass_user.php">Forgot password?</a></li>
		</ul>
		<div class="new_account" style="font-family: 'Tajawal', sans-serif;color:#474747;text-align:center;border-top:1px solid #ededed;">
		<br>
		<br>
	   <h2>NEW USER?</h2><br>
	   <p style="font-size:16px;">Create a account for free.</p><br>
	   <a href="signup_user_tut_info.php" style="background-color:#cc324b;padding:3%;border:0;border-radius:3px;color:white;text-decoration:none;">Create a account</a>
       </div>
	   <br>
	   <br>
	</form>
	
</body>
</html>

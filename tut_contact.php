<?php
session_start();
require 'pdodb.php';

//here is the start of the result showing to the user
if(isset($_SESSION['user_logged']))
{
    //here we are using the session to provide tutor id

    //======================================================

    $tut_id=$_SESSION['tut_id'];
   

  //==============================================
  $query="SELECT * FROM tuts_profile WHERE tut_id=?";
  $stmt=$conn->prepare($query);
  if($stmt->execute([$tut_id]))
  {
    
    if($tut=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      
      //here we start our html for the tutor contact
        ?>


    <div class="tut_contact">
        <div class="image_container">
         <img src="<?php echo$tut['tut_img'];?>" height="200px" width="150px">
    </div>
         <ul id="tut_info">
         <li><h3><?php echo$tut['tut_name']?></h3></li>
         
         <li><span>Tutor ID: </span> <?php echo$tut['tut_id']?></li>
         <li><span>Contact Number:</span> <?php echo$tut['tut_mob'] ?></li>
         <li><span>Email:</span> <?php echo $tut['email']?></li>
         <li><span>Address:</span> <br><?php echo $tut['addr'] ?></li><br>
         <form action="" method="post">
         <li><a href="user_logout_succ.php" style="background-color:#cc324b;border:0;color:white;height:40px;width:180px;border-radius:3px;cursor:pointer;text-decoration:none;padding:3%;">Logout</a></li>
         </form>
         <li><a href="index.php" style="text-decoration:none;">Go to home page</a></li>
         
    </ul>
    
    </div>
   <?php

     }
     else
     {
       die();
     }
}
else
{
    die();
}



}
else
{
  die();
}



?>
</body>
</html>

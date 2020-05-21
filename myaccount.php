<?php 
session_start();
require 'pdodb.php';

//HERE IS THE SECTION FOR THE STUDENT PROFILE AND PERSONAL INFO
if(isset($_SESSION['user_logged']))
{
    if(isset($_SESSION['type']) && $_SESSION['type']=='user')
    {
       
        $user_mob=$_SESSION['user_logged'];
        $query="SELECT * FROM user_student WHERE user_mob=?";
        $stmt=$conn->prepare($query);
        if($stmt->execute([$user_mob]))
        {
            
            if($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
            
            ?>
              <div class="page_account_container">
                  
               <p style="font-size:25px;background-color:#cc324b;border-top-left-radius:3px;border-top-right-radius:3px;color:white;padding:2px;text-align:center;"> <ion-icon name="contact"  style="position:relative;top:2px;"></ion-icon>Account Info</p>
               <div class="page_account_inner_container">
               <br>
               <div class="image_account_container">
              <img src="logos/photo.jpeg" height="120" width="120" class="profile_img">
              <br>
                 
              <p class="name"  style="color:#474747;"><?php echo strtoupper($row['username']) ?></p>
              </div>
             
              <br>
              <p class="name">&nbsp<ion-icon name="person"></ion-icon><span>Student Id | </span><?php echo$row['user_id'] ?></p>
              <p class="name">&nbsp<ion-icon name="phone-portrait"></ion-icon><span>Registred Mobile no | </span><?php echo$row['user_mob'] ?></p>
              <p class="name">&nbsp<ion-icon name="mail"></ion-icon> <span>Registred Email | </span><?php echo$row['email'] ?></p> 
              <p class="name">&nbsp<ion-icon name="pin"></ion-icon><span>Saved Address |<br><br> </span><?php echo strtoupper($row['addr']) ?></p> 
              <br>
          
              <div class="link_page"><br>
              <a href="user_logout_succ.php"><ion-icon name="log-out"></ion-icon> Logout</a> | <a href="forgot_pass_user.php"><ion-icon name="key"></ion-icon> Change Password</a>
            </div>
            </div>
             </div>

    <?php
            }
        }
    }
}





//HERE IS THE SECTION FOR THE TUTORS PROFILE AND PROFILE CHANGE
else if(isset($_SESSION['tutor_logged']))
{
   if(isset($_SESSION['type']) && $_SESSION['type']=='tutor')
   {
       $tutor_mob=$_SESSION['tutor_logged'];
       $query2="SELECT * FROM tuts_profile WHERE tut_mob=?";
       $stmt=$conn->prepare($query2);
       if($stmt->execute([$tutor_mob]))
       {
           if($row=$stmt->fetch(PDO::FETCH_ASSOC))
           {
         ?>
         <div class="page_account_container">
               <p style="font-size:25px;background-color:#cc324b;border-top-left-radius:3px;border-top-right-radius:3px;color:white;padding:2px;text-align:center;">My account</p>
               <div class="page_account_inner_container">
               <br>
              <!--here is the div for the center of the image-->
              <div class="image_account_container">
              <img src="<?php echo$row['tut_img'] ?>" height="120" width="120" class="profile_img">
              <br>
                  
              <p class="name"><?php echo strtoupper($row['tut_name']) ?></p>
              </div>
              <!--here is the end of the div for the align of the items-->
              <br>
              
              <p class="name"><span>Tutor Id | </span><?php echo$row['tut_id'] ?></p>
              <p class="name"><span>Registred Mobile no | </span><?php echo$row['tut_mob'] ?></p>
              <p class="name"><span>Registred Email | </span><?php echo$row['email'] ?></p>
              <p class="name"><span>Qualification | </span><?php echo$row['tut_qualification'] ?></p>
              <p class="name"><span>Year of experience | </span><?php echo$row['experience'] ?> Years</p>
              <p class="name"><span>Address | </span><?php echo$row['addr'] ?> </p>    
              
              <br>
              <div class="link_page">
                  <br>
                  
              <a href="user_logout_succ.php">Logout</a> | <a href=""> <ion-icon name="key"></ion-icon>  Change Password</a>
            </div>
           </div>
             </div>
<?php
           }
       }
    }
}
else
{
       echo "<div class='container_myaccount' id='myaccount' style='margin:0 auto;margin-top:130px;border:1px solid #cccccc;text-align:center;padding:3%;'>
       <div class='inner_container_myaccout'>
       
       <br>
       <a href='choicelogin.php' style='background-color:#cc324b;padding:10px;color:white;'><ion-icon src='_ionicons_svg_md-person.svg'></ion-icon> &nbsp Login</a><br>
       <br>
      <p>Login to  continue to my account.</p>
   
      <hr style='color:#ededed;'>
      <br>
      <a href='index.php' style='padding:10px;'><ion-icon name='arrow-round-back'></ion-icon> Back to home</a><br>
      </div>
   </div>";
}
?>






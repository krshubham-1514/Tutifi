<?php
require 'header.php';
require 'pdodb.php';
//class here is category
$class=$_POST['class_user'];
$class_tut="%$class%";
//it is the database board array
$board=$_POST['board_user'];
if($board=="state")
{
  $board=$_POST['board'];
}
$board_tut="%$board%";
//It is the subjects the tutor is tuting in case of tutions
$subject=$_POST['subject'];
$subject_tut="%$subject%";
//this part is the constant part of the user and tutor both
$mode=$_POST['mode'];

$time=$_POST['time'];
$pincode=$_POST['pincode'];
//==================================================================
//function to fetch the rating of the tutors
function fetch_rating($tutor_id,$conn)
{
  $output_rating=0;
  $query_rating="SELECT AVG(tutor_rating) as rating FROM tutor_rating WHERE tutor_id=?";
  $stmt4=$conn->prepare($query_rating);
  if($stmt4->execute([$tutor_id]))
  {
    if($rating=$stmt4->fetch(PDO::FETCH_ASSOC))
    {
     return round($rating['rating'],1);
    }
  }

}
//function to count the number of the tutor rating the students number
function fetch_number($tutor_id,$conn)
{
  $query_number="SELECT count(*) FROM tutor_rating WHERE tutor_id=?";
  $stmt5=$conn->prepare($query_number);
  if($stmt5->execute([$tutor_id]))
  {
    $count=$stmt5->fetchColumn();
    return $count;
  }
}


//===============================================================
$query="SELECT * FROM tuts_profile WHERE cat_choosen LIKE ? AND board LIKE ? AND tut_sub LIKE ? AND mode=? AND time_tut=? AND pincode=? AND active=1";
$stmt=$conn->prepare($query);
$num=0;   
if($count=$stmt->execute([$class_tut,$board_tut,$subject_tut,$mode,$time,$pincode]))
  {
    ?>
    <div class="this_container">
      <div class="info_box">
      <span id="tutor" style="font-size:25px;"></span> &nbsp<span style="font-size:25px;color:green;">tutors found in your locality.</span><br>
     </div>
      <br>
     <?php
     while($row=$stmt->fetch(PDO::FETCH_ASSOC))
     { 

      $num=$num+1;
    //this the loop of the search tutor according student choice         
           ?>
      
      <div class="result">
      
        <div class="tut_detail">
          <div class="image_container">
          <img src="<?php echo$row['tut_img'];?>" height="180" widht="120" class="img_tut">
          </div>
          
          <br>
          <div class="tut_name">
          <h3 style="font-family:Nunito;color:#575757;"><?php echo $row['tut_name'];?></h3>
         
         </div>
        </div>
        <div class="info_detail">
          <ul>
            <li><h3 style="font-family:Fira+Sans;">Teachers deatils</h3></li>
            <li><span>Tutor ID: </span><?php echo $row['tut_id'];?></li>
            <li><span>Teaching experience:</span><?php echo $row['experience']." years";?></li>
            <li><span>Teacher qualification:</span><?php echo $row['tut_qualification'];?></li>
            <li><span>Age:</span><?php echo $row['age'];?></li>
            <li><span>Teaching mode:</span><?php echo $row['mode'];?></li>
            <li><span >Gender:</span><span style="font-size:15px;color:#cc324b;"><?php echo $row['gender'];?><span></li>
            <li><span >Address:<br></span><span style="font-size:15px;color:#cc324b;"><?php echo $row['addr'];?><span></li>
            
       </ul>
      </div>
      <div class="info_detail" id="rating">
          <ul>
            
            <li><h3 style="font-family:Fira+Sans;">Teachers reviews</h3></li>
            <br>
            
            <li><p>Tutor average rating-<span style="font-size:20px;"> <?php $tutor_rating=fetch_rating($row['tut_id'],$conn);
            echo $tutor_rating; ?></span></p></li>
            <li><span>Total students rated:</span><span style="font-size:20px;"> <?php $count_rating=fetch_number($row['tut_id'],$conn);
            if($count_rating==0)
            {
              $count_rating="Not Rated";
            }
            echo $count_rating; ?></span></li>
            <br>
            <?php
            //here we are  fixing the problem of the star rating
            if($tutor_rating==5)
            {
              ?>
            <li><img src="logos/star5.jpg" height="50" width="220"></li>
            <?php
            }
            if($tutor_rating==4)
            {
            ?>
            <li><img src="logos/star4.jpg" height="50" width="220"></li>
            
            <?php
            }
            if($tutor_rating==3)
            {
            ?>
            <li><img src="logos/star3.jpg" height="50" width="220"></li>
            
            <?php
            }
            if($tutor_rating==2)
            {
            ?>
            <li><img src="logos/star2.jpg" height="50" width="220"></li>

              <?php
            }
            if($tutor_rating==1)
            {
            ?>
            <li><img src="logos/star1.jpg" height="50" width="220"></li>
             
            <?php
            }
            if($tutor_rating==0)
            {
            ?>
            <li><img src="logos/star0.jpg" height="50" width="220"></li>
            <?php
            }
            //star rating system ends here
            ?>
            <br>
            <li class="btn_book"><a href="signin_user_tut_info.php?tut_id=<?php echo$row['tut_id'];?>">Get tutor contact number</a></li>
       
       </ul>
      </div>
     </div>
      <?php
      
     }
     if($num==0)
     {
       $num="No";
     }
     echo "<script>document.getElementById('tutor').innerHTML='{ $num }';</script>";
    
    }



   //here we are sending mail for information if no data found


   if($num==0)
   {
     //here we saving all the information for the post of the requirment
     $_SESSION['class_req']=$class;
     $_SESSION['board_req']=$board;
     $_SESSION['subject_req']=$subject;
     $_SESSION['mode_req']=$mode;
     $_SESSION['time_req']=$time;
     $_SESSION['pincode']=$pincode;

     //here the saving of the user information ends
     ?>
     <div class="post_requirment">
     <ul class="post_req_container" style="list-style:none;">
    
     
       <div class="info_req">
      
       <p>Post your requirment.We will mail you if we found any tutor that fits
         your requirment in our records.</p>
      </div> 
      <br>
      <div id="info_req_sign">
      
      <p id="account_warn">Login/Create account to post requirment.</p>
     </div><br>
       <h2>Post Requirment</h2>
     
     <form action="post_req_confirm.php" method="post">
     
      <br>
     
     
   <br>
   <li>
      <input type="submit"  name="post_req" value="Post requirment">
   </li>
      </ul>
   </form>
     </div>
     <?php  
}
     

?>
</div>
<?php
include 'footer.php';
?>
</body>
</html>

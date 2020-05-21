<?php
session_start();
include 'pdodb.php';
$rating=$_GET['rating'];
$review=$_GET['review'];
$tutor_id=$_SESSION['tutor_id'];
$arr=array($tutor_id,$rating,$review);
$query="INSERT INTO tutor_rating(tutor_id,tutor_rating,student_review) VALUES (?,?,?)";
$stmt=$conn->prepare($query);
if($stmt->execute($arr))
{
?>
<div class="container" style="width:450px;margin:0 auto;">
<div class="confirm">
<div class="inner_container_confirm">
   <img src="logos/tick.png" height="60" width="60">
   <h2 style="color:#cc324b;text-align:center;">Thanks for your valuable feedback</h2>
   <p>your feedback will help us to improve our services.</p>
    <a href="index.php">Go to home page</a>
   </div> 
</div>
</div>
</div>
<?php
}
else
{
    //do nothing
}
?>
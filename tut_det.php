<?php
include 'pdodb.php';
session_start();
//checking  the user session 
if(isset($_SESSION['tut_acc']))
{
  $mobile=$_SESSION['tut_acc'];

  
  
}
else
{
    die(); 
}
//checking of the user session ends here
$_SESSION['img']='logos/photo.jpeg';

if(isset($_POST['upload']))
{
$filename=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];
$location='tutor_img/'.$filename;
//UPLOADING THE IMAGE OF THE TUTOR TO THE DATABASE
if(move_uploaded_file($temp_name,$location))
{
    $query="UPDATE tuts_profile SET tut_img=? WHERE tut_mob=?";
    $stmt=$conn->prepare($query);
    $arrp=array($location,$mobile);
    if($stmt->execute($arrp))
    {
          
          $_SESSION['img']=$location;
    }
    else
    {

           echo "your image upload failed";

    }
}
}

//SUBMITTING THE REST OF THE DATA
if(isset($_POST['submit']))
{
    //home or group mode of the tutor
   $coach_type=$_POST['yesorno'];
   //qualification of the tutor 
   $quali=$_POST['tutq'];
   //category or class to teacher is teaching
   $cat_tut=$_POST['check'];
   $tut_cat=implode(",",$cat_tut);
   //board of the tutors 
   if(isset($_POST['board']))
   {
   $board=$_POST['board'];
   $tut_board=implode(",",$board);
   }
   else
   {
       $tut_board="NO";
   }
   //subjects of the tutor is here
   if(isset($_POST['subject']))
   {
   $subject=$_POST['subject'];
   $tut_subject=implode(",",$subject);
   }
   else
   {
       $tut_subject="NO";
   }  
  //time prefrance of the tutuor
   $time=$_POST['time']; 
  
   
   
   $arr=array($coach_type,$quali,$tut_cat,$tut_board,$tut_subject,$time,$mobile);
   $query='UPDATE tuts_profile SET mode=?,tut_qualification=?,cat_choosen=?,board=?,tut_sub=?,time_tut=? WHERE tut_mob=?';
   $stmt=$conn->prepare($query);
   if($stmt->execute($arr))
   {
       session_destroy();
      header("Location:tut_confirm.php");
   }
   else
   {
      
   }

    
}


?>

 
<!doctype html>
<head>
<title>
</title>
<meta name="viewport" content="width=device-width,intial-scale=1.0">
</head>

<script src="jquery-3.3.1.js"></script>
<link rel="stylesheet" type='text/css' href="tut_det.css">
<link rel="stylesheet" type='text/css' href="footer.css">
<link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Oswald|Questrial|Raleway|Roboto|Ubuntu" rel="stylesheet"> 

<body>

<div class="page_det_container">
  <div class="upload">
   <form action="" method="post" enctype="multipart/form-data">
       <ul class="tut_det">
       <div style="border-bottom:2px solid #cc324b;color:#cc324b;">
       <li><h2>About your profession.</h2></li>
       <li><p style="font-size:16px;">(Ensure all details should be correct.)</p></li>
       </div><br>
       <div style="border-bottom:0px solid #cccccc;color:#7f7f7f;">
           <li style=""><h4>Upload your photo.</h4>(<span style="font-size:15px;">Use passport size photo recommended:200*200</span>)</li>
</div><br> 
           <li><img src="<?php echo $_SESSION['img']?>" height="160" width="145"  id="imag"></li>
           <li><input type="file" name="image"  required></li>
           <li><input type="submit" name="upload" value="Upload" style="height:30px;width:80px;"></li>
            
      </ul>  
  </form>
  </div>

  <div class="tutor_details">
     <form action="" method="post">
     <div style="border-bottom:2px solid #cc324b;color:#575757;">
     <h4 style="">Which type of coaching you provide?</h4><span style="font-size:15px;">
         <p>Home tution-(means you have to visit student's home for tution)</p>
         <p>Group tution-(means student will come to your address for tution)</p>
     </div>    
     </span>

 <br>
 <br>  
  
    <input type="radio" id="test1" value="HOME" name="yesorno" checked>
    <label for="test1">Home</label>
  
&nbsp&nbsp
    <input type="radio" id="test2" value="GROUP" name="yesorno">
    <label for="test2">Group</label>
 
  <br>
<br>


     <div style="border-bottom:2px solid #cc324b;color:#575757;">
     <p style=""><h4>Select your highest qualification</h4></p>
    </div><br><br>

    <!--option to select from the user profile-->
    <select class="qual_tut" name="tutq" style="height:40px;width:90%;border-radius:3px;border:1px solid #7f7f7f" required>
<option selected disabled>Select highest qualification</option>     
<option value="Bachelor of Architecture - B.Arch">Bachelor of Architecture - B.Arch</option>
<option value="Bachelor of Arts - B.A. ">Bachelor of Arts - B.A. </option>
<option value="Bachelor of Ayurvedic Medicine & Surgery - B.A.M.S.">Bachelor of Ayurvedic Medicine & Surgery - B.A.M.S. </option>
<option value="Bachelor of Business Administration - B.B.A.">Bachelor of Business Administration - B.B.A.</option>
<option value="Bachelor of Commerce - B.Com.">Bachelor of Commerce - B.Com.</option>
<option value="Bachelor of Computer Applications - B.C.A.">Bachelor of Computer Applications - B.C.A.</option>
<option value="Bachelor of Dental Surgery - B.D.S.">Bachelor of Dental Surgery - B.D.S.</option>
<option value="Bachelor of Design - B.Des. / B.D.">Bachelor of Design - B.Des. / B.D.</option>
<option value="Bachelor of Education - B.Ed.">Bachelor of Education - B.Ed.</option>
<option value="Bachelor of Engineering / Bachelor of Technology - B.E./B.Tech.">Bachelor of Engineering / Bachelor of Technology - B.E./B.Tech.</option>
<option value="Bachelor of Fine Arts - BFA / BVA">Bachelor of Fine Arts - BFA / BVA</option>
<option value="Bachelor of Fisheries Science - B.F.Sc./ B.Sc. (Fisheries).">Bachelor of Fisheries Science - B.F.Sc./ B.Sc. (Fisheries).</option>
<option value="Bachelor of Homoeopathic Medicine and Surgery - B.H.M.S.">Bachelor of Homoeopathic Medicine and Surgery - B.H.M.S.</option>
<option value="Bachelor of Laws - L.L.B.">Bachelor of Laws - L.L.B.</option>
<option value="Bachelor of Library Science - B.Lib. / B.Lib.Sc.">Bachelor of Library Science - B.Lib. / B.Lib.Sc.</option>
<option value="Bachelor of Mass Communications - B.M.C. / B.M.M.">Bachelor of Mass Communications - B.M.C. / B.M.M.</option>
<option value="Bachelor of Medicine and Bachelor of Surgery - M.B.B.S.">Bachelor of Medicine and Bachelor of Surgery - M.B.B.S.</option>
<option value="Bachelor of Nursing ">Bachelor of Nursing </option>
<option value="Bachelor of Pharmacy - B.Pharm / B.Pharma.">Bachelor of Pharmacy - B.Pharm / B.Pharma.</option>
<option value="Bachelor of Physical Education - B.P.Ed.">Bachelor of Physical Education - B.P.Ed.</option>
<option value="Bachelor of Physiotherapy - B.P.T.">Bachelor of Physiotherapy - B.P.T.</option>
<option value="Bachelor of Science - B.Sc.">Bachelor of Science - B.Sc.</option>
<option value="Bachelor of Social Work - BSW / B.A. (SW)">Bachelor of Social Work - BSW / B.A. (SW)</option>
<option value="Bachelor of Veterinary Science & Animal Husbandry - B.V.Sc. & A.H. / B.V.Sc">Bachelor of Veterinary Science & Animal Husbandry - B.V.Sc. & A.H. / B.V.Sc</option>
<option value="Doctor of Medicine - M.D.">Doctor of Medicine - M.D.</option>
<option value="Doctor of Medicine in Homoeopathy - M.D. (Homoeopathy)">Doctor of Medicine in Homoeopathy - M.D. (Homoeopathy)</option>
<option value="Doctor of Pharmacy - Pharm.D ">Doctor of Pharmacy - Pharm.D </option>
<option value="Doctor of Philosophy - Ph.D. ">Doctor of Philosophy - Ph.D. </option>
<option value="Doctorate of Medicine - D.M.">Doctorate of Medicine - D.M.</option>
<option value="Master of Architecture - M.Arch.">Master of Architecture - M.Arch.</option>
<option value="Master of Arts - M.A.">Master of Arts - M.A.</option>
<option value="Master of Business Administration - M.B.A.">Master of Business Administration - M.B.A.</option>
<option value="Master of Chirurgiae - M.Ch.">Master of Chirurgiae - M.Ch.</option>
<option value="Master of Commerce - M.Com. ">Master of Commerce - M.Com. </option>
<option value="Master of Computer Applications - M.C.A.">Master of Computer Applications - M.C.A.</option>
<option value="Master of Dental Surgery - M.D.S.">Master of Dental Surgery - M.D.S.</option>
<option value="Master of Design - M.Des./ M.Design.">Master of Design - M.Des./ M.Design.</option>
<option value="Master of Education - M.Ed.">Master of Education - M.Ed.</option>
<option value="Master of Engineering / Master of Technology - M.E./ M.Tech.">Master of Engineering / Master of Technology - M.E./ M.Tech.</option>
<option value="Master of Fine Arts - MFA / MVA">Master of Fine Arts - MFA / MVA</option>
<option value="Master of Laws - L.L.M.">Master of Laws - L.L.M.</option>
<option value="Master of Library Science - M.Lib./ M.Lib.Sc.">Master of Library Science - M.Lib./ M.Lib.Sc.</option>
<option value="Master of Mass Communications / Mass Media - M.M.C / M.M.M.">Master of Mass Communications / Mass Media - M.M.C / M.M.M.</option>
<option value="Master of Pharmacy - M.Pharm ">Master of Pharmacy - M.Pharm </option>
<option value="Master of Philosophy - M.Phil. ">Master of Philosophy - M.Phil. </option>
<option value="Master of Physical Education M.P.Ed. / M.P.E.">Master of Physical Education M.P.Ed. / M.P.E.</option>
<option value="Master of Physiotherapy - M.P.T.">Master of Physiotherapy - M.P.T.</option>
<option value="Master of Science - M.Sc.">Master of Science - M.Sc.</option>
<option value="Master of Social Work / Master of Arts in Social Work - M.S.W. / M.A. (SW)">Master of Social Work / Master of Arts in Social Work - M.S.W. / M.A. (SW)</option>
<option value="Master of Science in Agriculture - M.Sc. (Agriculture)">Master of Science in Agriculture - M.Sc. (Agriculture)</option>
<option value="Master of Surgery - M.S.">Master of Surgery - M.S.</option>
<option value="Master of Veterinary Science - M.V.Sc.">Master of Veterinary Science - M.V.Sc.</option>

</select>

<br><br>
    <!--option for the tutors ends here-->
    <p>
    <input type="radio" id="test4" value="" name="">
    <label for="test4">Other(<span style="font-size:14px;"> if you didn't find your qualification in list</span>)</label>
  </p>
   <div class="write_tut">
   </div>
         
  
  </div>
  <br>
  <br>
  <div style="border-bottom:2px solid #cc324b;color:#575757;">
  <h4>Select category you want to teach.</h4>(<span style="font-size:15px;">you can choose more than one options</span>)
  </div>
  <br>
  <br>
  <div class="select_tut">
     
      <ul>
      <li><h4 style="color:#cc324b">Tution(Class wise)</h4></li>
      <label>
      <li><input type="checkbox"  name="check[]" value="10" class="check_board"> Nursery & KG</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="11" class="check_board"> Class  I</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="12" class="check_board"> Class II</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="13" class="check_board"> Class III</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="14" class="check_board"> Class IV</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="15" class="check_board"> Class V</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="16" class="check_board"> Class VI</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="17" class="check_board"> Class VII</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="18" class="check_board"> Class VIII</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="19" class="check_board"> Class IX</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="20" class="check_board"> Class X</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="21" class="check_board"> Class XI</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="22" class="check_board"> Class XII</li>
      </ul> 
 
      <ul>
      <li><h4 style="color:#cc324b">Hobby</h4></li>
      <label>
      <li><input type="checkbox" name="check[]" value="23"> Dance</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="24"> Singing</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="25"> Cooking</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="26"> Photography</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="27"> Music</li>
      </label>
      </ul> 
      <ul>
      <li><h4 style="color:#cc324b">Speaking classes</h4></li>
      <label>
      <li><input type="checkbox" name="check[]" value="28"> English</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="29"> French</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="30"> German</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="31"> Chinese</li>
      </label>
      </ul>
      <ul>
      <li><h4 style="color:#cc324b">Programing languages</h4></li>
      <label>
      <li><input type="checkbox" name="check[]" value="32"> Java</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="33"> Javascript</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="34"> Python</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="35"> C</li>
      </label>
      
     </ul>
     <ul>
    
      <li><h4 style="color:#cc324b">Fitness</h4></li>
      <label>
      <li><input type="checkbox" name="check[]" value="36"> Yoga</li>
      </label>
      <label>
      <li><input type="checkbox" name="check[]" value="37"> Gym</li>
      </label>
      
     </ul>
    
  </div>

  <!--here is the prefered time of the tutor for the tution-->

    

  <div class="select_board">
  <div style='border-bottom:2px solid #cc324b;color:#575757;'><br><h4>Select board you teach.(For tutions only)</h4>
  <p>** In case of state board select your state</p>(<span style='font-size:15px;'>you can choose more than one options</span>)</div><br>
  
  <label><input type='checkbox' name='board[]' value='400' class="check"> CBSE</label><br>

  <label><input type='checkbox' name='board[]' value='401' class="check"> NIOS</label> <br>
  <label><input type='checkbox' name='board[]' value='402' class="check"> IB </label> <br>
  <label><input type='checkbox' name='board[]' value='403' class="check"> IGCSE</label><br>
  <label><input type='checkbox' name='board[]' value='404' class="check"> ICSE</label><br>
  <label><input type='checkbox' name='board[]' value='' id="state"> STATE BOARD (your state board) </label><br>
  <!--select  the board here-->
  <br>
  <div id="board_cat">
<select name="board[]" id="board_user">
<option value="" selected disabled>Select state </option>	
<option value="405">	Andhra Pradesh</option>	
<option value="406">	Arunachal Pradesh	</option>	
<option value="407">	Assam	</option>	
<option value="408">Bihar</option>		
<option value="409">	Chhattisgarh	</option>	
<option value="410">	Goa	</option>	
<option value="411">	Gujarat	</option>	
<option value="412">	Haryana	</option>	
<option value="413">	Himachal Pradesh</option>		
<option value="414">	Jammu and Kashmir	</option>	
<option value="415">	Jharkhand	</option>	
<option value="416">	Karnataka	</option>	
<option value="417">	Kerala	</option>	
<option value="418">	Madhya Pradesh</option>		
<option value="419">	Maharashtra	</option>	
<option value="420">	Manipur	</option>	
<option value="421">	Meghalaya	</option>	
<option value="422">	Mizoram	</option>	
<option value="423">	Nagaland	</option>	
<option value="424">	Odisha	</option>	
<option value="425">	Punjab	</option>	
<option value="426">	Rajasthan	</option>	
<option value="427">	Sikkim	</option>	
<option value="428">	Tamil Nadu	</option>	
<option value="429">	Telangana	</option>	
<option value="430">	Tripura	</option>	
<option value="431">	Uttar Pradesh	</option>	
<option value="432">	Uttarakhand </option>	
<option value="433">	West Bengal	</option>	
   
    </select>

  </div>
<!--board selection form ends here-->
  <br>
  </div>
  <div class="select_board">
  <div style='border-bottom:2px solid #cc324b;color:#575757;'><br><h4>Select subjects you teach.(For tutions only)</h4>(<span style='font-size:15px;'>you can choose more than one options</span>)</div><br>
  
  <label><input type='checkbox' name='subject[]' value='101'> All subjects(of my selected classes)</label><br>
  <label><input type='checkbox' name='subject[]' value='102'> Maths</label><br>
  <label><input type='checkbox' name='subject[]' value='103'> English</label><br>
  
  <label><input type='checkbox' name='subject[]' value='104'> Science</label> <br>
  <label><input type='checkbox' name='subject[]' value='105'> Physics</label><br>
  <label><input type='checkbox' name='subject[]' value='106'> Chemistry</label><br>
  <label><input type='checkbox' name='subject[]' value='107'> Biology</label> <br>
  <label><input type='checkbox' name='subject[]' value='108'> Social studies </label> <br>
  <label><input type='checkbox' name='subject[]' value='109'> Hindi</label><br>
  <br>
  </div>
  <div style="border-bottom:2px solid #cc324b;color:#575757;">
  <h4>Select your time slots(in which you will be available).</h4>(<span style="font-size:15px;">you can choose more than one options</span>)
  </div><br><label>
    <input type="checkbox"  value="200" name="time">
    6:00-8:00 am</label>
     &nbsp
     &nbsp
     <br>
     <br><label>
    <input type="checkbox"  value="201" name="time">
    2:00-4:00 pm</label>
     &nbsp
     &nbsp
     <br>
     <br><label>
    <input type="checkbox"  value="202" name="time">
    4:00-6:00 pm</label>
    &nbsp
    &nbsp
    <br>
    <br><label>
    <input type="checkbox"  value="203"  name="time">
    6:00-8:00 pm</label><br>
    &nbsp
    &nbsp
  <ul style="list-style:none;">
  <li><input type="submit" name="submit" value="Continue" style="background-color:#cc324b;border:0;color:white;height:40px;width:180px;border-radius:3px;cursor:pointer;" id="btn"><br></li>
  </form>
</ul>
</div>
<script src="jquery-3.3.1.js"></script>
<script>
$(document).ready(function()
{


    //select board selection javascript is here
    $("#state").click(function()
        {
             var check=document.getElementById("state");
             if(check.checked)
              {
               document.getElementById("board_cat").style.display="block";
              }
              else
              {
                document.getElementById("board_cat").style.display="none";
              }
              
           
        });
     
    //select board selection javascript is ends here
    $("#test4").click(function()
    {
        $(".qual_tut").replaceWith("<div class='tut_write'><input type='text' placeholder='Enter your highest qualification' name='tutq' value='' style='height:40px;width:90%;border-radius:3px;border:1px solid #7f7f7f' required></input></div>");
    });
   
    $(".check_board").click(function()
    {
            
        //============================================================
        var board=document.getElementsByClassName("check_board");
    var number=board.length;
             var i=0;
             var flag=0;
             for(i=0;i<13;i++)
             {
                if(board[i].checked)
                 {
                    
                  flag=1;
                  break;
                 }
                 
                 
              }
              if(flag==0)
              {
                
               
                $(".select_board").css("display","none");
                
              }
              if(flag==1)
              {
              $(".select_board").css("display","block");
              }
             
             
    });


});
</script>
</body>
</html>


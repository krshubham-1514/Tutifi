<?php 
session_start();
require 'pdodb.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_SESSION['user_logged']))
{
       
       $form_mobile=$_SESSION['user_logged'];
       $query3="SELECT count(*) FROM user_student WHERE user_mob=?";
       $stmt3=$conn->prepare($query3);
       $stmt3->execute([$form_mobile]);
       $count=$stmt3->fetchColumn();
       if($count>0)
       {
      
              $query4="SELECT user_id,username,email FROM user_student WHERE user_mob=?";
              $stmt4=$conn->prepare($query4);
              if($stmt4->execute([$form_mobile]))
               {
                 if($row4=$stmt4->fetch(PDO::FETCH_ASSOC))
                 {
                    
                   
                      //collecting all the information from the session 

                         $class_post=$_SESSION['class_req'];
                         $board_post=$_SESSION['board_req'];
                         $subject_post= $_SESSION['subject_req'];
                         $mode_post=$_SESSION['mode_req'];
                         $time_post=$_SESSION['time_req'];
                         $pincode_post=$_SESSION['pincode'];
                         $mobile_post=$form_mobile;
                         $email_post=$row4['email'];
                         $user_id_post=$row4['user_id'];
                         $username_post=$row4['username'];

                         $input_array=array($user_id_post,$class_post,$board_post,$subject_post,$mode_post,$time_post,$mobile_post,$email_post,$pincode_post);
              
                         //posting the requirment to the database
                         $query5="INSERT INTO requirment(student_id,class,board,subject_code,mode,time_code,user_mob,user_email,pincode) 
                         VALUES (?,?,?,?,?,?,?,?,?)";
                         $stmt5=$conn->prepare($query5);
                         if($stmt5->execute($input_array))
                         {
                          header("Location:post_succ.php");
                           /*
                             //here the collection of the information from the session ends
                 
                            //here we start our mail sending script
                            $email="krshubham1514@gmail.com";
                            $recipent="Tutifi.com";
                            $mail = new PHPMailer(true);
                            
                                                          // Passing `true` enables exceptions
                            //Server settings
                                                             // Enable verbose debug output
                            $mail->SMTPDebug=2; 
                            $mail->isSMTP(); 
                            
                                                                // Set mailer to use SMTP
                            $mail->Host ='localhost'; // Specify main and backup SMTP servers
                            $mail->SMTPAuth =false;                               // Enable SMTP authentication
                                                   // SMTP password
                            $mail->Secure= false;                           // Enable TLS encryption, `ssl` also accepted
                            $mail->Port =25;                                    // TCP port to connect to
                            //Recipients
                            $mail->setFrom('contactus@tutifi.com', 'Tutifi.com');
                            $mail->addAddress($email, $username_post);     // Add a recipient
                            //Content
                            $mail->isHTML(true);                                  // Set email format to HTML
                            $mail->Subject = 'New Request from tutifi';
                            $mail->Body    = ".<br>
                            student_id=$user_id_post,<br>
                            student_name=$username_post,<br>
                            student_class=$class_post<br>
                            student_subject=$subject_post<br>
                            student_board=$board_post<br>
                            student_mode=$mode_post<br>
                            student_time_pref=$time_post<br>
                            student_pincode=$pincode_post<br>
                            student_mobile_number=$mobile_post<br>
                            student_email_id=$email_post<br>
                            ";
                
              
                            if($mail->send())
                            {
                            

                               header("Location:post_succ.php");
                              
                            

                          
                            }
                            else
                            {
                                header("Location:post_succ.php");
                            }
                            */
                                      
                          }
                                     
                        
                        }
 
                } 
       }
    
     
}
else
{
    header("Location:user_post_login.php");
   
    
}
?>

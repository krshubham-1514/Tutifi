<?php
session_start();
require 'pdodb.php';
$tutor_id=96;
$_SESSION['tutor_id']=$tutor_id;
?>
<div class="container_rate_student">
 <div class="container_rate_inner">
    <?php
    $query="SELECT tut_img,tut_name FROM tuts_profile WHERE tut_id=?";
    $stmt=$conn->prepare($query);
    if($stmt->execute([$tutor_id]))
    {
        if($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            
            ?>
            <br>
            <img src="<?php echo $row['tut_img']; ?>" height="120" width="120" style="border-radius:100%;">
            <p><?php echo  strtoupper($row['tut_name']); ?> </p>
            <br>
            <form action="" method="POST" id="Comments">
            <h2>Rate this tutor</h2>
           
            <span id="star_rating_message" style="color:green;"></span>
            <br>
            <br>
            <div class="star_rating_system">
                <span class="fa fa-star hover fa-2x" id="1"></span>&nbsp
                <span class="fa fa-star hover fa-2x" id="2"></span>&nbsp
                <span class="fa fa-star hover fa-2x" id="3"></span>&nbsp
                <span class="fa fa-star hover fa-2x" id="4"></span>
                <span class="fa fa-star hover fa-2x" id="5"></span>&nbsp
            </div>    
            <br>
           
                <h3>Reviews about this tutor:
                <textarea  name="user_review" id="review" required>
                </textarea>
                <br>
                <br>
            <input type="button" onclick="redirect()" value="submit" style="background-color:#cc324b;width:150px;height:40px;border:0;color:white;border-radius:2px;cursor:pointer;">

           </form>

            
        

</div>
</div>

            <?php
        }
    }
    ?>
 </div>
</div>
<script src="jquery-3.3.1.js"></script>
<script src="jqueryui/jqueryui.js"></script>
<script>
    $(document).ready(function()
    {

          //function to show the user rating of the tutor 
          $(".hover").click(function()
        {
            if(window.count==1)
            {
                //do nothing
            }
            else{

                        
                        var star_rating_value=this.id;
                        
                        for(i=1;i<star_rating_value;i++)
                        {
                            $("#"+i).addClass("checked");
                        }
             window.rating=star_rating_value;
                
            }  
            
           window.count=1;
        })
      
       var stars=document.getElementsByClassName("hover");
       $(".hover").hover(function()
       {
           if(window.count==1)
           {
               //do nothing
               
           }
           else
           {
            
            var id=this.id;
            hover_color(id);
           }
       },
       function()
       {
         if(window.count==1)
         {
             //do nothing
         }
         else
         {
         for(i=1;i<=5;i++)
         {
             $("#"+i).removeClass("checked");
         }
         }
       })
    });

</script>
<script>
//function to be called to make a yellow hover effect when
function hover_color(id)
{
        var stars=document.getElementsByClassName("hover");
        for(i=1;i<=id;i++)
        {
           $("#"+i).addClass("checked");
        }
}
//here is the function to redirect the user to new page
function redirect()
{
     //here we are collecting all the information from the page and submitting to the server 
       var review=$("#review").val();
       var rating=window.rating;
    
       if(window.count==1 && rating!=null)
       {
          window.location.href="rating_success.php?rating="+rating+"&review="+review;
       }
     
     
}


</script>
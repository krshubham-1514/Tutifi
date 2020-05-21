<?php 
session_start();
session_destroy();
?>




<!doctype html>
<head>
<meta name="viewport" content="width=device-width,intial-scale=1.0">
<title>
</title>
<style>
body
    {
        background-color:#ededed;
        font-family:'Work Sans';
    }

  .box
  {
      margin:0 auto;
      margin-top:100px;
      border-radius:5px;
      height:auto;
      width:70%;
      background-color:white;
      box-shadow:-1px 2px 3px 4px  #dbdbdb;
     

  }
  .inner_container_confirm
  {
      width:70%;
      margin:0 auto;
  }
  .confirm
  {
      position:relative;
      top:30%;
      padding:8%;
      text-align:center;
      
  }
  .inner_container_confirm  img
  {
      display:block;
      margin:0 auto;
  }
  @media screen and (max-width:767px)
{
    .box
  {
      width:90%;

  }
  .confirm
  {
      
      padding:5%;
      
      
  }
}
@media screen and (max-width:500px)
{
    .box
  {
      width:90%;

  }
  .confirm
  {
      
      padding:3%;
      
      
  }
}
</style>

<link href="https://fonts.googleapis.com/css?family=Raleway|Bree+Serif|Josefin+Sans|Rubik|Work+Sans" rel="stylesheet"> 
<script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
<body>
<div class="box">
<div class="confirm">
    <div class="inner_container_confirm">
   <img src="logos/tick.png" height="60" width="60">
   <h2 style="color:#cc324b;text-align:center;">You are successfully logged out.</h2>
    <a href="signin.php">Login</a> <br><br>
    <a href="index.php"><ion-icon name="arrow-round-back"></ion-icon>Go to home page</a>
   </div>  
  </div>

</div>
</body>
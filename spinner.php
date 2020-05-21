<!doctype html>
<head>
<title></title>
</head>
<style>
.spinner{
    height:60px; 
    width:60px;
    border:3px solid #cccccc;
    border-top:#cc324b 4px solid;
    border-radius:100%;
    animation:spin 0.6s infinite linear;
    position:fixed;
    top:43%;
    left:46%;
    z-index:1000000;
}
@keyframes spin
{
    from{
        transform:rotate(0deg);
        
    }
    to
    {
        transform:rotate(360deg);
        
    }



}




</style>

<body>

<div class="spinner">

</div>


</body>
</html>
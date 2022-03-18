<!DOCTYPE html><!--STATUS OK--><html>
<head>
   <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro&display=swap" rel="stylesheet">
<meta http-equiv="content-type" content="text/html;charset=utf-8">

<style type="text/css">
    
    
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
    }
    .h1
    {
        font-family: 'Anonymous Pro', monospace;
        background-color: black;
        color: white;
    }

    .h2
    {
        font-family: 'Anonymous Pro', monospace;
    }



</style>
<script>
window.alert = function()  
{     
confirm("Perfect !!");
 window.location.href="level2.php?keyword=test"; 
}
</script>
<title>Welcome to level1</title>
</head>
<body style="background-color:white;">
<h1 class="h1" align=center>Welcome to Level 1</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["name"];
echo "<h2 align=center>Welcome ".$str."</h2>";
?>
<center><img src=level1.png width="500px" height="300px"></center>
<?php 
echo "<h3 align=center> Payload Length:".strlen($str)."</h3>";
?>
</body>
</html>





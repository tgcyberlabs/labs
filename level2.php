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
</style>
<script>
window.alert = function()  
{     
confirm("Well Done");
 window.location.href="level3.php?writing=wait"; 
}
</script>
<title>Welcome to Level 2</title>
</head>
<body>
<h1 class="h1" align=center>Welcome to Level 2</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
echo "<h2 align=center> ".htmlspecialchars($str)." 0 Results Found</h2>".'<center>
<form action=level2.php method=GET>
<input name=keyword  value="'.$str.'">
<input type=submit name=submit value="Search"/>
</form>
</center>';
?>
<br>
<center><img src=level2.png></center>

</body>
</html>





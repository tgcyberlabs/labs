<!DOCTYPE html><!--STATUS OK--><html>
<head><link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro&display=swap" rel="stylesheet">
<meta http-equiv="content-type" content="text/html;charset=utf-8">

<style type="text/css">
    
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
confirm("Forwarded to Next Level");
 window.location.href="level4.php?keyword=try harder!"; 
}
</script>
<title>Welcome to Level 3</title>
</head>
<body>
<h1 class="h1" align=center>Welcome to Level 3</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
echo "<h2 align=center>0 ".htmlspecialchars($str)." Related Results.</h2>"."<center>
<form action=level3.php method=GET>
<input name=keyword  value='".htmlspecialchars($str)."'>
<input type=submit name=submit value=Submit />
</form>
</center>";
?>
<center><img src=level3.png></center>

</body>
</html>

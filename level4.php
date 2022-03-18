<!DOCTYPE html><!--STATUS OK--><html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro&display=swap" rel="stylesheet">
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
confirm("Wow, forwarded to Level 5");
 window.location.href="level5.php?keyword=find a way out!"; 
}
</script>
<title>Welcome to Level 4</title>
</head>
<body>
<h1 class="h1" align=center>Welcome to Level 4</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str2=str_replace(">","",$str);
$str3=str_replace("<","",$str2);
echo "<h2 align=center>".htmlspecialchars($str)." - 0 Related Results Found.</h2>".'<center>
<form action=level4.php method=GET>
<input name=keyword  value="'.$str3.'">
<input type=submit name=submit value=Submit />
</form>
</center>';
?>
<center><img src=level4.png></center>

</body>
</html>



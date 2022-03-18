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
confirm("Kudos, Next Level");
 window.location.href="level6.php?keyword=break it out!"; 
}
</script>
<title>Welcome to Level 5</title>
</head>
<body>
<h1 class="h1" align=center>Welcome to Level 5</h1>
<?php 
ini_set("display_errors", 0);
$str = strtolower($_GET["keyword"]);
$str2=str_replace("<script","<scr_ipt",$str);
$str3=str_replace("on","o_n",$str2);
echo "<h2 align=center>".htmlspecialchars($str)." - 0 Related Results.</h2>".'<center>
<form action=level5.php method=GET>
<input name=keyword  value="'.$str3.'">
<input type=submit name=submit value=Submit />
</form>
</center>';
?>
<center><img src=level5.png></center>

</body>
</html>


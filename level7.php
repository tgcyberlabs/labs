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
confirm("Hooray, Next Level Up");
 window.location.href="level8.php?keyword=nice try!"; 
}
</script>
<title>Welcome to Level 7</title>
</head>
<body>
<h1 class="h1" align=center>Welcome to Level 7</h1>
<?php 
ini_set("display_errors", 0);
$str =strtolower( $_GET["keyword"]);
$str2=str_replace("script","",$str);
$str3=str_replace("on","",$str2);
$str4=str_replace("src","",$str3);
$str5=str_replace("data","",$str4);
$str6=str_replace("href","",$str5);
echo "<h2 align=center> ".htmlspecialchars($str)." - 0 Related Results Found.</h2>".'<center>
<form action=level7.php method=GET>
<input name=keyword  value="'.$str6.'">
<input type=submit name=submit value=Submit />
</form>
</center>';
?>
<center><img src=level7.png></center>

</body>
</html>

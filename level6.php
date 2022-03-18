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
confirm("Pakka, Next Level UP");
 window.location.href="level7.php?keyword=move up!"; 
}
</script>
<title>Welcome to Level 6</title>
</head>
<body>
<h1 class="h1" align=center>Welcome to Level 6</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str2=str_replace("<script","<scr_ipt",$str);
$str3=str_replace("on","o_n",$str2);
$str4=str_replace("src","sr_c",$str3);
$str5=str_replace("data","da_ta",$str4);
$str6=str_replace("href","hr_ef",$str5);
echo "<h2 align=center>".htmlspecialchars($str)." -0 Related Results Found.</h2>".'<center>
<form action=level6.php method=GET>
<input name=keyword  value="'.$str6.'">
<input type=submit name=submit value=Submit />
</form>
</center>';
?>
<center><img src=level6.png></center>

</body>
</html>



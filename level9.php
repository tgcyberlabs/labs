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
confirm("LEVEL UP NOW");
 window.location.href="level10.php?keyword=well done!"; 
}
</script>
<title>Welcome to Level 9</title>
</head>
<body>
<h1 class="h1" align=center>Welcome to Level 9</h1>
<?php 
ini_set("display_errors", 0);
$str = strtolower($_GET["keyword"]);
$str2=str_replace("script","scr_ipt",$str);
$str3=str_replace("on","o_n",$str2);
$str4=str_replace("src","sr_c",$str3);
$str5=str_replace("data","da_ta",$str4);
$str6=str_replace("href","hr_ef",$str5);
$str7=str_replace('"','&quot',$str6);
echo '<center>
<form action=level9.php method=GET>
<input name=keyword  value="'.htmlspecialchars($str).'">
<input type=submit name=submit value=Add >
</form>
</center>';
?>
<?php
if(false===strpos($str7,'http://'))
{
  echo '<center><BR><a href="This Link is Invalid">The Link is Invalid</a></center>';
        }
else
{
  echo '<center><BR><a href="'.$str7.'">Click this link</a></center>';
}
?>
<br>
<center><img src=level9.png></center>

</body>
</html>

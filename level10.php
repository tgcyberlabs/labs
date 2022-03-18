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
confirm("Wowowowowow You've completed all the Quests !!");
 window.location.href="end.php?keyword=good job!"; 
}
</script>
<title>Welcome to Level 10</title>
</head>
<body>
<h1 class="h1" align=center>Welcome to Level 10</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str11 = $_GET["t_sort"];
$str22=str_replace(">","",$str11);
$str33=str_replace("<","",$str22);
echo "<h2 align=center> ".htmlspecialchars($str)." - 0 Related Results.</h2>".'<center>
<form id=search>
<input name="t_link"  value="'.'" type="hidden">
<input name="t_history"  value="'.'" type="hidden">
<input name="t_sort"  value="'.$str33.'" type="hidden">
</form>
</center>';
?>
<br>
<center><img src=level10.png></center>

</body>
</html>



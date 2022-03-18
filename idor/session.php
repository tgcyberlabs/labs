<html>
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

.h11
{
	font-family: 'Anonymous Pro', monospace;
	align: center;
	
}

.bank
{
    
    border-radius: 12px;
}
    
</style>

<title>IDOR Lab || Hack into Sri's Account</title>

<body>
    <h1 class="h1" align=center>Welcome to IDOR Challenge<br><br>Goal: Hack into Sri's Bank Account to find his Account Balance !!</h1>
<br>
<br>
<center><img class="bank" src="welcomebank.png" width="700" height="300"></center>
<br>
<h1 class="h11" align="center">Welcome Vijay !</h1>

<h2><center>
<?php

	$session = $_GET["sessionid"];

	if ($session == '2' )
	{
		echo 'Account Balance for Vijay: $99.99';
	}
	elseif ($session == '55')
	{
		echo 'Account Balance for Sri: $20000';

	}
	else
	{
		echo 'Account Balance for :  $';

	}



?>
</center>

</h2>

</body>

</html>



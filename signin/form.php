
<html>
<head>
<form method ="post"
action ="validate.html">

<link href="styles.css" rel="stylesheet" type="text/css" />
<style>
body{
	 background-image:url("/Meta/images/donate.jpg");
	 background-repeat:no-repeat;
}
</style>
<body>
<?php
	include 'login.php';
	session_start();
		echo $name;
		$
		
		?>

<div class="center">
<div class="row">
<div class="row">

<div class="box">First name:</div>
<div><input type ="text"name=fname size=20></div>
</div>

<div class="box">Last Name:</div>
<div><input type="text" name=lname></div>
</div>


<div class="row">
<div class="box">Email :</div>
<div><input type = "text" name=email></div>
</div>

<div class="row">

<div class="box"><h2>Donation For</h2></div>
<div class="box"><input type = "checkbox" name=donating>Cancer</div>
<div class="box"><input type = "checkbox" name=donating>Asthma</div>
<div class="box"><input type = "checkbox" name=donating>Diabetes</div>
</div>

<div class="row">
<div class="box">Enter ur Comments:</div>
<div class="box"><textarea name="comments" rows ="5" col ="65">
</textarea></div>
</div>


<div class="row">
<div class="box"><h1> Donation Details</h1></div>
<div class="box">Amount Of Payment:</div>
<div class="box"><input type ="text" name=payment size=20></div>
</div>

<div class="row">
<div class="box">Card Number:</div>

<div class="box"><input type="text" name=cardno.></div>
</div>

<div class="row">
<div class="box">Card Code Verification Number:</div>
<div class="box"> <input type = "text" name=code></div>

<!--kjhlkj<input type="day" name="day_year">-->
<div class="row">
<div class="box">Billing Postal or Street Address:</div>
<div class="box"><input type = "text" name=biling></div>
<div class="box">Billing City:</div>
 <div class="box"><input type = "text" name=city></div>
<div class="box">Billing State:</div> 
<div class="box"><input type = "text" name=state></div>
</div>

<input type ="submit"
value=submit name = Submit For Donation><br />


</div>
</div>
</div>
</body>
</form>
</head>
</html>

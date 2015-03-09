<?php
		
		include 'config.php';
		$surname= $_POST['surname'];
		$name= $_POST['name'];
		$father= $_POST['father'];
		$email_id= $_POST['email'];
		$password=$_POST['passwd'];
		$mobile=$_POST['mobile'];
		$insert = "insert into signup(surname,name,father,email_id,password,mobileno) values('$surname','$name','$father','$email_id','$password','$mobile')";
		//$insert = "insert into user(user,password) values('$user','$password')";
	$done=mysql_query($insert);
		if($done)
		{
		header('location:../index.html');
		}
		else
		{
		echo mysql_error();
		} 	
?>
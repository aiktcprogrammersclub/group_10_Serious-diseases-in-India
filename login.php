<?php
	
		include 'config.php';
		$name= $_POST['name'];
		$password=$_POST['password'];
		$select = "select * from signup where name = '$name' AND password = '$password'";
		$result = mysql_query($select);
		
		if($result)
		{
			$num_rows = mysql_num_rows($result);
				if($num_rows==1)
				{
			echo "Welcome";
				}
		else{
		echo "Wrong username / password ";
		}
		}
		/*
		
		$row = mysql_fetch_array($select);
			if($select)
			{
				echo "yes";
			
			}else
			{
				echo "nooo";
			}
			*/
		//echo $row[0];
		/*if($row[0] == $user && $row[1] == $password ){
			echo "Welcome" ;
		}
		else{
			echo "not correct";
		}*/
?>
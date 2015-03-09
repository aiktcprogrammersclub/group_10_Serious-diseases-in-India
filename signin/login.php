<?php
	
		include 'config.php';
		$name= $_POST['name'];
		$password= $_POST['password'];
		$select = "select * from signup where name ='$name' AND password ='$password'";
		
		$result = mysql_query($select);
		
		if($result)
		{
			$num_rows = mysql_num_rows($result);
				if($num_rows==1)
					
				{
					session_start();
				
					$_SESSION['user_login']=$name;
					echo "Welcome";
					header("Location:../index.html");
				}
		else
		{
				
				header("Location:register.php?password=error");
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
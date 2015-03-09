<?php
	include 'config.php';
		$Name= $_POST['Name'];
		$Email= $_POST['E-mail'];
		$Subject= $_POST['Subject'];
		$Message= $_POST['Message'];
	$insert = "insert into feedback(Name,Email_id,Subject,Message) values('$Name','$Email','$Subject','$Message')";
	$done=mysql_query($insert);
		if($done)
		{
		echo "inserted";
		}
		else
		{
		echo mysql_error();
		} 	
		
		$select = "select * from feedback where Name = '$Name' ";
		
		$result = mysql_query($select);
		
		if($result)
		{
			$num_rows = mysql_num_rows($result);
				if($num_rows==1)
				{
			echo "Welcome";
			echo "Name: $data[1]";
		echo("<tr><td>Name:$data[1]</td>E-mail:<td>$data[0]</td>Subject<td>:$data[2]</td>:$Message<td>$data[3]</td></tr>");
				}
		
		else{
			echo "Wrong username / password ";
		}
		}	
?>
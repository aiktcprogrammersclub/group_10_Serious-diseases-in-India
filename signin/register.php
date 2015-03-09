		<html>
		<head>
		<title>MY LOGIN</title>
		</head>
		<body>
		 <link rel="stylesheet" href="style.css" />
		 <script src="a.js"></script>
		<div id="image">
		<!--<div class="wrapper">
		<form  method = "POST"  action ="register.php">
		<fieldset>
			<div class="row">
                <div class="box"> Are You Registered Member ?</div>
                <div class="box"><input type="radio" name="signin" value="login" id="login1">login</div>
                <div class="box"><input type="radio" name="signin" value="register" id="register1">register</div>
            </div>
		</div>
		</fieldset>
	</form>-->
		
		<div class="wrapper1">
			<div id="loginform" >
			 
				<fieldset class="bg">
				<form action="login.php" method="post">
				<div class="row">
					<h2>Login:</h2>
				<div class="row">
					 <div class="box">USER NAME:</div>
					 <div class "box"><input type = text  placeholder="Username" name="name" required></div>
				 </div>
				 <div class="row">
					<div class="box">PASSWORD:</div>
					<div class="box"><input type = password  placeholder="Password"  name="password" required ></div>
				</div>
						<input type="Submit" name="Submit" value="Submit" >
				</div>
				
					</form>
				</fieldset>
				
			</div>
			</div>
		
				<div id="signup">
				 <form method="POST" action="signup.php">
			
				<div class="wrapper1">
				<fieldset class="bg">
				
						<div class="row">
						<h2>Register:</h2>
						<div class ="row">
									<div class="box">NAME :</div>
                                    <div class="box"><input type="textname" placeholder="surname" name=surname required></div>
                                    <div class="box"><input type="textname" placeholder="name" name=name required></div>
                                    <div class="box"><input type="textname" placeholder="father" name=father required></div>
                                </div>
						<div class="row">
						<div class="box">EMAIL_ID:</div>
						<div class="box"><input id="email" type=email name=email placeholder="someone@somewhere.com" required></div>
				</div>
				<div class="row">
						<div class="box">PASSWORD:</div>
                        <div class="box"><input type=password name=passwd placeholder="min 8 digit passwd" required></div>
                    </div>
				<div class="row">
						<div class="box2">CONFIRM PASSWORD:</div>
                        <div class="box"><input type=password name=passwd placeholder="min 8 digit passwd" required></div>
                    </div>
				<div class="row">
						<div class="box">MOBILE NO:</div>
						<div class="box"> <input type=number name=mobile onclick=function myselect placeholder="min 10 digit" required></div>
				</div>
                    
				</div>
                        <input id="register" type=submit name=submit1>
				</fieldset>
				</div>
				</div>
				</form>
			</div>
		
	
		</body>
		</html>

		<?php
		
		
	
	
		?>
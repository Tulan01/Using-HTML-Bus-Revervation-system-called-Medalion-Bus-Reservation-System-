
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>MOBRS User sign up</title>
<style>
.header-div{
	padding: 1px;
	color: white;
	background-color: black;
	font-style: italic;
	background: rgba(0, 0, 0, 0.6);
}
.footer{
   padding: 10px;
   color: white;
   background-color: black;
   text-align: center;
   height: 50px;
   border: 1px solid white;
   background: rgba(0, 0, 0, 0.6);
}
.id {
	
	border: 1px solid gray;
	font-color: red;
	margin-top: 50px;
	margin-bottom: 50px;
	margin-left: 300px;
	margin-right: 300px;
	background-color: gray;
	padding: 50px;
	padding-left: 150px;
	background: rgba(128, 128, 128 ,0.1);
	font-color: red;
}
input[type=submit]{
	width: 100%;
	background-color: black;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}
input[type=submit]:hover{
	background-color:red;
}
input[type=text]{
	width: 100%;
	border: 1px solid #ccc;
	border-radius: 4px;
	margin: 8px 0;
	padding: 12px 20px;
	display: inline-block;
	box-sizing: border-box;
}
input[type=password]{
	width: 100%;
	border: 1px solid #ccc;
	border-radius: 4px;
	margin: 8px 0;
	padding: 12px 20px;
	display: inline-block;
	box-sizing: border-box;
}
.menu-header-div{
	height: 50px;
	background-color: black;
	background: rgba(0, 0, 0, 0.6);
}
.menu-header-div ul{
	list-style-type: none;
	padding: 0;
	margin: 0;
	overflow: hidden;
}
.menu-header-div li{
	float: left;
}
.menu-header-div li a {
	display: block;
	color: white;
	text-align: center;
	padding: 14px 20px;
	text-decoration: none;
	background: rgba(0, 0, 0, 0.6);
}
.menu-header-div li a:hover{
	background-color:#111;
	background: rgba(0, 0, 0, 0.6);
}
.active {
    background-color: #4CAF50;
}
.menu-header-div li a:hover:not(.active){
	background-color: #111;
}
</style>

<script type="text/javascript">
	function onSubmit() {
		var name = document.getElementById("name").value;
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;
		var conPassword = document.getElementById("conPassword").value;
		var phoneNo = document.getElementById("phoneNo").value;
		var age = document.getElementById("age").value;
		var gender = document.getElementById("gender").value;
		
		if(name == ''){
			alert("Please,Enter Your Name.");
			return false;
		}
		else if(email == ''){
			alert("Please,Enter Your Email.");
			return false;
		}
		else if(password == ''){
			alert("Please,Enter Your password.");
			return false;
		}
		else if(conPassword == ''){
			alert("Please,Enter Confirm Password.");
			return false;
		}
		else if(phoneNo == ''){
			alert("Please,Enter phoneNo.");
			return false;
		}
		else if(age == ''){
			alert("Please,Enter Aige.");
			return false;
		}
		else if(gender == ''){
			alert("Please,Enter Gender.");
			return false;
		}
		else if(password != conPassword){
			alert("Password and Confirm Password Not Match!");
			return false;
		}
		return true;
	}
</script>
</head>

<body background="images/3.jpg">
	<div>
		<div class="header-div">
	        <h2>MEDALLION Online Bus Reservation System</h2>
	    </div>
	    <div class="body-div">
		<div class="menu-header-div">
			<div style="float: right;">
				<ul>
					
					<li>
						<a href="index.php">Home</a>
					</li>
				</ul>
			</div>
			<div style="clear: both;"></div>
	  </div>
	</div>
		<div class="id" style="font-size:150%" >
			<h2 style="color:red">User Register From</h2>
			<form action="InsertDatabase.php" method="post">
				<?php
					$action = '';
					if($_SERVER["REQUEST_METHOD"] == "GET"){
						 $action = $_GET['action'];
						 if($action == "userIn"){
						 	
				?>
				<input type="hidden" name="action" value="userInfo" />

				<?php
					}
					else if($action == "createAdmin"){
				?> 
				<input type="hidden" name="action" value="adminInfo" />
				<?php
					}
				}
				?>
				<label for="name">Name</label>
	   			<input type="text" id="name" name="name" placeholder="Your name.." />
	   			<label for="email">Email</label>
	   			<input type="text" id="email" name="email" placeholder="Your email.." />
	   			<label for="password">Password</label>
	   			<input type="password" id="password" name="password" placeholder="Your password.." />
	   			<label for="confirmPassword">Confirm Password</label>
	   			<input type="password" id="conPassword" name="conPassword" placeholder="Confirm password.." />
	   			<label for="phoneNo">PhoneNo</label>
	   			<input type="text" id="phoneNo" name="phoneNo" placeholder="Your phoneNo.." />
	   			<label for="age">Age</label>
	   			<input type="text" id="age" name="age" placeholder="Your age.." />
	   			<label for="gender">Gender</label>
	   			<table>
	   				   <tr>
	   				   		<td>
                                <input id = "gender" type="radio" name="gender" value="male"> Male
                                <input id = "gender" type="radio" name="gender" value="female"> Female
                                <input id = "gender" type="radio" name="gender" value="other"> Other
                            </td>
	   				   </tr>
	   			</table>
	   			<input type="submit" value="submit" onclick="if(onSubmit()) { return true; } else { return false; }" />     
			</form>
		</div>
		<div class="footer">
			Copyright &copy;ppcctulan@gmail.com
		</div>
	</div>
</body>
</html>
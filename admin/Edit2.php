<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
	<style type="text/css">
		.header-div{
			padding: 1px;
			color: white;
			background-color: black;
			font-style: italic;
			text-align: center;
		}
		.footer{
		   padding: 10px;
		   color: white;
		   background-color: black;
		   text-align: center;
		   height: 50px;
		   border: 1px solid white;
		}
		.id {
			border: 1px solid gray;
			margin-top: 50px;
			margin-bottom: 50px;
			margin-left: 300px;
			margin-right: 300px;
			background-color: black;
			padding: 50px;
			padding-left: 150px;
			background: rgba(0, 0, 0, 0.4);
}
		}
		input[type=submit]{
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type=submit]:hover{
			background-color: #45a049;
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
	<?php
		$id ='';$name = '';$email = '';$password = '';$phoneNo = '';$gender = '';$age;
		if($_SERVER["REQUEST_METHOD"] == "GET"){
	  		  $id = $_GET['id'];
	  	      $name = $_GET['name'];
	  	      $email = $_GET['email'];
	  	      $password = $_GET['password'];
	  	      $phoneNo = $_GET['phoneNo'];
	  	      $gender = $_GET['gender'];
	  	      $age = $_GET['age'];

	  	}
    ?>

	 <div>
		<div class="header-div">
	        <h2>MEDALLION Online Bus Reservation System</h2>
	    </div>
		<div class="id">
			<h2 style="color:black">Update From</h2>
			<form action="Update2.php" method="post">
				<input type="hidden" name="action" value="createEdit" />
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
				<label for="name">Name</label>
	   			<input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Your name.." />
	   			<label for="email">Email</label>
	   			<input type="text" id="email" name="email" value="<?php echo $email; ?>" placeholder="Your email.." />
	   			<label for="password">Password</label>
	   			<input type="password" id="password" name="password" value="<?php echo $password; ?>" placeholder="Your password.." />
	   			<label for="confirmPassword">Confirm Password</label>
	   			<input type="password" id="conPassword" name="password" value="<?php echo $password; ?>" placeholder="Confirm password.." />
	   			<label for="phoneNo">PhoneNo</label>
	   			<input type="text" id="phoneNo" name="phoneNo" value="<?php echo $phoneNo; ?>" placeholder="Your phoneNo.." />
	   			<label for="age">Age</label>
	   			<input type="text" id="age" name="age" value="<?php echo $age; ?>" placeholder="Your age.." />
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
			Copyright &copy; FHT.com
		</div>
	</div>

</body>
</html>
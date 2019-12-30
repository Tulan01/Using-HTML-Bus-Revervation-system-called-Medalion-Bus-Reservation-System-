<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login Page</title>
<style>
.header{
   padding: 9px;
   color: white;
   background-color: black;
   height: 60px;
   border: 1px solid white;
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
	margin-top: 50px;
	margin-bottom: 50px;
	margin-left: 300px;
	margin-right: 300px;
	background-color: gray;
	padding: 70px;
	padding-left: 150px;
	background: rgba(128, 128, 128 ,0.1);
}
.button {
    background-color: white;
    border: none;
    color: black;
    padding: 8px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;

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
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if(username == '' && password == ''){
			alert("Please, enter username and password.");
			return false;
		} else if(username == ''){
			alert("Please, enter username.");
			return false;
		} else if(password == ''){
			alert("Please, enter password.");
			return false;
		}
		
		return true;
	}
</script>
</head>

<body background="images/3.jpg">
     <div>
		<div class="header">
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
		<div class="id">
			<h2 style="color: red">Login Page</h2>
			<form action="DoLogin.php" method="post">
				<table>
					<tr>
						<td>
							<p style="color : red">Username</p>
						</td>
						<td width="25px">
							:
						</td>
						<td>
							 <input type="hidden" name="action" value="userLogin"/>
							 <input id="name" type="text" name="name" />
						</td>
					</tr>
					<tr>
						<td>
							<p style="color : red">Password</p>
						</td>
						<td>
							:
						</td>
						<td>
							<input id="password" type="password" name="password"/> 
						</td>
					</tr>
					<tr>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
							<input type="submit" value="Sign In" onclick="if(onSubmit()) { return true; } else { return false; }"/>
						</td>
					</tr>

				</table> 
				<p style="color : red">Not yet Registered ? Signup now </p>
				<a href="RegisterU.php?action=userIn" style="color : red" class="button"> Sign up</a>     
			</form>
		</div>
		<div class="footer">
			Copyright &copy;ppcctulan@gmail.com
		</div>
	</div>
</body>
</html>
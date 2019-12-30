<!DOCTYPE html>
<html>
<head>
	<title>Admin Home Page</title>
</head>
<body>
	   <!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Home Page Project</title>
<style type="text/css">
	.header-div{
	padding: 1px;
	color: white;
	background-color: black;
	font-style: italic;
	text-align: center;
}
.body-div{
	margin-left: 200px;
	margin-right:150px;
	height:500px;
	border: 1px solid white;
}
.footer-div{
	padding: 3px;
	color: white;
	background-color: black;
	text-align: center;
}
.menu-header-div{
	height: 50px;
	background-color: black;
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
}
.menu-header-div li a:hover{
	background-color:#111;
}
.active {
    background-color: #4CAF50;
}
.menu-header-div li a:hover:not(.active){
	background-color: #111;
}
.adminform-div{
	padding: 30px;
	height: 700px;
	background-color: #f2f2f2;
	border-radius: 5px;
}
input[type=submit]{
	width: 20%;
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

.admin-inf-div {
	float: left;
}
table{
	border-collapse: collapse;
	width: 150%;
}
th,td{
	text-align: left;
	padding: 4px;
}
tr:nth-child(even) {
	background-color: white;
}
th{
	background-color: #4CAF50;
	color: white;
}
.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
</style>
</head>
<body background="images/4.jpg">
	<div>
	<div class="header-div">
	  <h2>MEDALLION Onine Bus Reservation System</h2>
	</div>
	<div class="body-div">
		<div class="menu-header-div">
			<div style="float: left;">
				<ul>
					<li><a href="AdminHome.php">Home</a></li>
					<li><a href="book.php">Booked Information</a></li>
					<li><a href="info.php">User Information</a></li>
					
				</ul>
			</div>
			<div style="float: right;">
				<ul>
					<li>
						<a href="AdminHome.php">Admin</a>
					</li>
					<li>
						<a href="index.php">Sign Out</a>
					</li>
				</ul>
			</div>
			<div style="clear: both;"></div>
	  </div>
	  <div class="adminform-div">
	  		
		   	<div class="admin-inf-div">
		   			<table>
		   					<tr>
		   						<td>Id</td>
		   						<td>Name</td>
		   						<td>Email</td>
		   						<td>PhoneNo</td>
		   						<td>Gender</td>
		   						<td>Age</td>
		   						<td>Active</td>
		   					</tr>
	   						<?php
	   							$link = mysqli_connect("localhost","root","","busreservee");
	   							$sql = "select * from userinfo";
	   							$result = mysqli_query($link , $sql);
	   							if($result){
	   								 if(mysqli_num_rows($result) > 0){
	   								 	 while($row = mysqli_fetch_array($result)){
	   								 	 	  $id = $row['id'];
	   								 	 	  $name = $row['name']; 
	   								 	 	  $email = $row['email'];
	   								 	 	  $phoneNo = $row['phoneNo'];
	   								 	 	  $gender = $row['gender'];
	   								 	 	  $age = $row['age'];


	   						?>
		   					<tr>
		   							<td>  <?php echo $id; ?>  </td>
		   							<td>  <?php echo $name; ?>  </td>
		   							<td>  <?php echo $email; ?>  </td>
		   							<td>  <?php echo $phoneNo; ?>  </td>
		   							<td>  <?php echo $gender; ?>  </td>
		   							<td>  <?php echo $age; ?>  </td>
		   							<td>
		   								<a class="button" href="UpdateDelete.php?id=<?php echo $id;?>&action=edit2">Edit</a>
		   								<a class="button" href="UpdateDelete.php?id=<?php echo $id;?>&action=delete2">Delete</a>
		   							</td>
		   					</tr>
		   					<?php
		   						       }
		   						       mysqli_free_result($result);
		   						   }else{
		   						   		echo "No records matching your query were found.";
		   						   }
		   						}else{
		   							echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		   						}
		   					?>
		   			</table>
		   	</div>
	  </div>
	</div>
	<div class="footer-div">
		Copyright &copy; pritam.com
	</div>
<div>
</body>
</html>
</body>
</html>
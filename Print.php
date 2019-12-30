<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	   <!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<style type="text/css">
	.header-div{
	padding: 1px;
	color: white;
	background-color: black;
	font-style: italic;
	text-align: left;
	background: rgba(0, 0, 0, 0.6);
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
	background: rgba(0, 0, 0, 0.6);
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
.adminform-div{
	padding: 30px;
	height: 700px;
	background-color: #f2f2f2;
	border-radius: 5px;
	
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

.admin-inf-div {
	float: left;

}
table{
	border-collapse: collapse;
	width: 300%;
}
th,td{
	text-align: left;
	padding: 10px;
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
<body background="images/2.jpg">
	<?php
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		$ori=$_GET['ori'];
		$des=$_GET['des'];
		$busname=$_GET['busName'];
		$class=$_GET['class'];
		$price=$_GET['price'];	
		$username=$_GET['name'];
		$time=$_GET['time'];
		$date=$_GET['date'];	
		$id=$_GET['id'];	
	}
	?>
	<div>
	<div class="header-div">
	  <h2>MEDALLION Online Bus Reservation System</h2>
	</div>
	<div class="body-div">
		<div class="menu-header-div">
			<div style="float: left;">
				<ul>
					<li>
						<a ><?php echo $username; ?></a>
					</li>
				</ul>
			</div>
			<div style="float: right;">
				<ul>
					
					<li>
						<a href="UserLog.php">Sign Out</a>
					</li>
				</ul>
			</div>
			<div style="clear: both;"></div>
	  </div>
	  <div class="adminform-div">
	  		
		   	<div class="admin-inf-div" >

		   		<form action="seat.php" method = "get">
		   			<h2> Seat Booking</h2>
		   			<table >
		   				<tr>
		   					<td>Name :</td>
		   					<td><?php echo $username; ?></td>
		   				</tr>
		  
		   				<tr>
		   				    <td>From :</td>
		   				    <td><?php echo $ori; ?></td>
		   				</td>
		   				<tr>
		   					<td>To :</td>
		   					<td><?php echo $des; ?></td>
		   				</tr>
		   				<tr>
		   					<td>BUS Name : </td>
		   					<td><?php echo $busname; ?></td>
		   				</tr>
		   			   <tr>
		   					<td>Class : </td>
		   					<td><?php echo $class; ?></td>
		   				</tr>
		   				<tr>
		   					<td>Price : </td>
		   					<td><?php echo $price; ?></td>
		   				</tr>
		   				<tr>
		   					<td>Time : </td>
		   					<td><?php echo $time; ?></td>
		   				</tr>
		   				<tr>
		   					<td>Date : </td>
		   					<td><?php echo $date; ?></td>
		   				</tr>
		   				<tr>
		   					<td>Select Seat Number</td>
		   					<td>
		   					<select name="seat">
		   						<option vale="1">1</option>
		   						<option vale="2">2</option>
		   						<option vale="3">3</option>
		   						<option vale="4">4</option>
		   					</select>
		   				</td>
		   				</tr>

		   				
		   				            <input type = "hidden" name = "busName" value="<?php echo $busname; ?>">
		   							<input type = "hidden" name = "class" value="<?php echo $class; ?>">
		   							<input type = "hidden" name = "price" value="<?php echo $price; ?>">
		   							<input type = "hidden" name = "ori" value="<?php echo $ori; ?>">
		   							<input type = "hidden" name = "des" value="<?php echo $des; ?>">
		   							<input type = "hidden" name = "name" value="<?php echo $username; ?>">
		   							<input type = "hidden" name = "time" value="<?php echo $time; ?>">
		   							<input type = "hidden" name = "date" value="<?php echo $date; ?>">
		   							<input type = "hidden" name = "id" value="<?php echo $id; ?>">
		   				
		   					
		   			

		   			</table>
		   			<td><input type= submit name= submit value = "Confirm"></td>
		   		</form>
		   	</div>
	 
	</div>
	<div class="footer-div">
		Copyright &copy;ppcctulan@gmail.com
<div>
</body>
</html>
</body>
</html>



	



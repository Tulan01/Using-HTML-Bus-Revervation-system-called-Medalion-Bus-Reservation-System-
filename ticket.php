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
<title>Home Page Project</title>
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
	width: 200%;
}
th,td{
	text-align: center;
	padding: 8px;
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
		$busname=$_GET['busname'];
		$class=$_GET['class'];
		$amount=$_GET['amount'];
		$seat=$_GET['seat'];
		$username=$_GET['name'];
		$time=$_GET['time'];
		$date=$_GET['date'];
		$id=$_GET['id'];

		if($seat==4){
		$st1=$_GET['st1'];
		$st2=$_GET['st2'];
		$st3=$_GET['st3'];
		$st4=$_GET['st4'];
        }
        else if($seat==3){
		$st1=$_GET['st1'];
		$st2=$_GET['st2'];
		$st3=$_GET['st3'];
        }
        else if($seat==2){
		$st1=$_GET['st1'];
		$st2=$_GET['st2'];
        }
        else if($seat==1){
		$st1=$_GET['st1'];
        }
			
	} 
	?>
	<div>
	<div class="header-div">
	  <h2>MEDALLION Online Bus Reservation System</h2>
	  <h2 style="float: right"><a href="index.php"> Home </a></h2>
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
						<a href="userLog.php">Sign Out</a>
					</li>
				</ul>
			</div>
			<div style="clear: both;"></div>
	  </div>
	       <?php
	   	     	$link = mysqli_connect("localhost","root","","busreservee");
	   			$sql = "select * from userinfo where id = $id";
	   			$result = mysqli_query($link , $sql);
	   			   if($result){
	   				  if(mysqli_num_rows($result) > 0){
	   				  	 while($row = mysqli_fetch_array($result)){
	   							 $email = $row['email'];
	   							 $phoneno = $row['phoneNo'];
	   							 $id = $row['id'];
	   							 }
		   						  mysqli_free_result($result);

                        }
                        else{
		   				   echo "No records matching your query were found.";
		   						   }
		   						}
		   			else{
		   				   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		   				}          

	       ?>
	  <div class="adminform-div">
	  		
		   	<div class="admin-inf-div">
		   		<form action="ticket.php" method = "get">
		   			<h2>Your Ticket</h2>
		   			<table class="table table-bordered">
		   				<tr>
		   					<td>ID :</td>
		   					<td><?php echo $id; ?></td>
		   				</tr>
		   				<tr>
		   					<td>Name :</td>
		   					<td><?php echo $username; ?></td>
		   				</tr>
		   				<tr>
		   					<td>Email :</td>
		   					<td><?php echo $email; ?></td>
		   				</tr>
		   				<tr>
		   					<td>phone No :</td>
		   					<td><?php echo $phoneno; ?></td>
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
		   					<td>Total  Amount : </td>
		   					<td><?php echo $amount; ?></td>
		   				</tr>
		   				<tr>
		   					<td>Number of seat : </td>
		   					<td><?php echo $seat; ?></td>
		   				</tr>
		   				<tr>
		   					<td> Seat No</td>
		   				<td>	<?php
		   					if($seat==4){
		   					 echo $st1;
		   					 echo $st2;
		   					 echo $st3;
		   					 echo $st4;
		                   
                              }
                          else if($seat==3){
                             echo $st1;
		   					 echo $st2;
		   					 echo $st3;
		
                              }
                          else if($seat==2){
		                     echo $st1;
		   					 echo $st2;
                              }
                          else if($seat==1){
		                     echo $st1;
                             }
                             ?>
                         </td>
		   				</tr>
		   			</table>
		   			<br>
		   			<br>
		   			<br>
		   			<h3 style="color: red"> Your Ticket Succesfully Booked </h3>
		   			<h5> Please pay through Bkash within 72 hours</h5>
		   			<p> Bkash Account no 01720573689 </p>
		   		</form>
		   	</div>
	  
	</div>
	<div class="footer-div">
		Copyright &copy; ppcctulan@gmail.com
	</div>
<div>
</body>
</html>
</body>
</html>
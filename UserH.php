<!DOCTYPE html>
<html>
<head>
	<title>User Hoe Page</title>
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
		$username=$_GET['name'];
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
						<a href="userlog.php">Sign Out</a>
					</li>
				</ul>
			</div>
			<div style="clear: both;"></div>
	  </div>
	  <div class="adminform-div">
	  		
		   	<div class="admin-inf-div" >
		   	<form action = "Reserve.php" method = "get">
		   		<table >
		   			<tr>
		   			    <td>
		   			        <h>ORIGIN</h>
		   			        <br>
	   						<?php
	   							$link = mysqli_connect("localhost","root","","busreservee");
	   							$sql = "select * from busroot";
	   							$result = mysqli_query($link , $sql);
	   							if($result){
	   								 if(mysqli_num_rows($result) > 0){
	   						?>
	   						<select name="cba">
	   								<?php

	   								 	 while($row = mysqli_fetch_array($result)){
	   								 	 	  $root = $row['root'];
	   								 	 	 

	   						        ?>	  
	   						         <option value="<?php echo $root; ?>" > <?php echo $root; ?></option> 

		   					
		   					      
		   						     <?php
		   						        }
		   						       mysqli_free_result($result);
		   						     ?>
		   						      </select>
		   						      <?php  
		   						   }else{
		   						   		echo "No records matching your query were found.";
		   						   }
		   						}else{
		   							echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		   						}
		   					?>
		   				</td>
		   			<br>
		   			<br>
		   			<br>
		   			<br>
		   				<td>
		   			        <h>DESTINATION</h>
		   			        <br>
	   						<?php
	   							$link = mysqli_connect("localhost","root","","busreservee");
	   							$sql = "select * from busroot";
	   							$result = mysqli_query($link , $sql);
	   							if($result){
	   								 if(mysqli_num_rows($result) > 0){
	   						?>
	   							<select name="abc" >
	   								<?php

	   								 	 while($row = mysqli_fetch_array($result)){
	   								 	 	  $root = $row['root'];
	   								 	 	 

	   						        ?>	  
	   						     <option value="<?php echo $root; ?>"> <?php echo $root; ?></option> 

		   							
		   						<?php
		   						         }
		   						        mysqli_free_result($result);
		   						?>        
		   						</select>        
       							<?php
		   						     }else{
		   						   		     echo "No records matching your query were found.";
		   						      }
		   						}else{
		   							    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		   						}
		   					    ?>
		   				</td>
		   			</tr>

		   			<tr>
		   				<td>Select Date </td>
		   				<td> <input type="date" name="date"></td>
		   			</tr>	
		   			<input type = "hidden" name = "name" value="<?php echo $username; ?>">
		   			<input type = "hidden" name = "id" value="<?php echo $id; ?>">
		   				  
		   				 
		   			</table>
		   			 <input type=submit name= submit>
		   	</div>
	  </div>

</form>
	<div class="footer-div">
		Copyright &copy; ppcctulan@gmail.com
	</div>
<div>
</body>
</html>
</body>
</html>
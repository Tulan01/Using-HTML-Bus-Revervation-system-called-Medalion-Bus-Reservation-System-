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
	width: 20%;
	background-color: #4CAF50;
	color: white;
	padding: 2px 4px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}
input[type=submit]:hover{
	background-color: #45a049;
}
input[type=text]{
	width: 20%;
	border: 1px solid #ccc;
	border-radius: 4px;
	margin: 8px 0;
	padding: 4px 8px;
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
	width: 100%;
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
  padding: 1px 1px 1px 1px;
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
		$seat=$_GET['seat'];
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
						<a href="Userlog.php">Sign Out</a>
					</li>
				</ul>
			</div>
			<div style="clear: both;"></div>
	  </div>
	  <div class="adminform-div">
	  		
		   	<div class="admin-inf-div" >
		   			<table class="table table-bordered">
		   				     <h2> Seat Selection</h2>
		   				     <h4> Available Seats Are</h4>
		   				     <table>
		   					<tr>
		   						<td>Window</td>
		   						<td>Chair</td>
		   						<td> </td>
		   						<td> </td>
		   						<td>Chair</td>
		   						<td>Window</td>
		   						
		   					</tr>
		   					<?php
		   					

		   					$link = mysqli_connect("localhost","root","","busreservee");

		   				    $sql="select * from ticketinfo where origin='$ori' and destination='$des' and busName='$busname' and class='$class' and date='$date' and time='$time' ";
		   					if($result=mysqli_query($link , $sql)){
		   						if(mysqli_num_rows($result)>0){
		   					  	?>
		   					
	   						<?php
	   							

	   							$sql = "select * from busseat1";
	   							$result = mysqli_query($link , $sql);
	   							if($result){
	   								 if(mysqli_num_rows($result) > 0){
	   								 	 while($row = mysqli_fetch_array($result)){
	   								 	 	  $st1 = $row['s1'];
	   								 	 	  $st2 = $row['s2'];
	   								 	 	  $st3 = $row['s3'];
	   								 	 	  $st4 = $row['s4'];
	   								 	 	 
	   								 	 	 
		   						      
		   				    ?>
		   			            <tr>
		   							<td>  <?php echo $st1; ?>  </td>
		   							<td>  <?php echo $st2; ?>  </td>
		   							<td></td>
		   							<td></td>
		   							<td>  <?php echo $st3; ?>  </td>
		   							<td>  <?php echo $st4; ?>  </td>
		   							

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
		   			<form action="seat1.php" method="get">
		   			<p>Type your seat</p>

		   			<?php
		   			    if($seat==4){
		   			    ?>
		   			     <input type="text" name="st1">
		   				 <input type="text" name="st2">
		   				 <input type="text" name="st3">
		   			     <input type="text" name="st4">
		   				
		   			<?php
		   			}
		   			else if($seat== 3){
		   			?>
                          
		   			      <input type="text" name="st1">
		   				  <input type="text" name="st2">
		   				  <input type="text" name="st3">
                     <?php
                     }
                     else if($seat== 2){
                     ?>
		                   <input type="text" name="st1">
		   			       <input type="text" name="st2">
                         
                         <?php
		   	      }
		   	        else if($seat== 1){
		   	        ?>
		   				   <input type="text" name="st1">
                         <?php
		   	      }
		   	      ?>
		   	      <table>
		   	      </tr>
		   				            <input type = "hidden" name = "busname" value="<?php echo $busname; ?>">
		   							<input type = "hidden" name = "class" value="<?php echo $class; ?>">
		   							<input type = "hidden" name = "price" value="<?php echo $price; ?>">
		   							<input type = "hidden" name = "ori" value="<?php echo $ori; ?>">
		   							<input type = "hidden" name = "des" value="<?php echo $des; ?>">
		   							<input type = "hidden" name = "name" value="<?php echo $username; ?>">
		   							<input type = "hidden" name = "time" value="<?php echo $time; ?>">
		   							<input type = "hidden" name = "seat" value="<?php echo $seat; ?>">
		   							<input type = "hidden" name = "date" value="<?php echo $date; ?>">
		   							<input type = "hidden" name = "id" value="<?php echo $id; ?>">
		   							<input type = "hidden" name = "a" value="<?php echo $a=1; ?>">
		   				
		   				</tr>
		   			</table>
		   	      <input type="submit" name="submit">
		   	  </form>



		   	  <?php
		   }
		   	
		   	else{



		   	
		   
	   							$sql = "select * from busseatno";
	   							$result = mysqli_query($link , $sql);
	   							if($result){
	   								 if(mysqli_num_rows($result) > 0){
	   								 	 while($row = mysqli_fetch_array($result)){
	   								 	 	  $st1 = $row['s1'];
	   								 	 	  $st2 = $row['s2'];
	   								 	 	  $st3 = $row['s3'];
	   								 	 	  $st4 = $row['s4'];
	   								 	 	  
		   						      
		   				    ?>
		   			            <tr>
		   							<td>  <?php echo $st1; ?>  </td>
		   							<td>  <?php echo $st2; ?>  </td>
		   							<td></td>
		   							<td></td>
		   							<td>  <?php echo $st3; ?>  </td>
		   							<td>  <?php echo $st4; ?>  </td>
		   							

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
		   			<form action="seat1.php" method="get">
		   			<p>Type your seat</p>

		   			<?php
		   			    if($seat==4){
		   			    ?>
		   			     <input type="text" name="st1">
		   				 <input type="text" name="st2">
		   				 <input type="text" name="st3">
		   			     <input type="text" name="st4">
		   				
		   			<?php
		   			}
		   			else if($seat== 3){
		   			?>
                          
		   			      <input type="text" name="st1">
		   				  <input type="text" name="st2">
		   				  <input type="text" name="st3">
                     <?php
                     }
                     else if($seat== 2){
                     ?>
		                   <input type="text" name="st1">
		   			       <input type="text" name="st2">
                         
                         <?php
		   	      }
		   	        else if($seat== 1){
		   	        ?>
		   				   <input type="text" name="st1">
                         <?php
		   	      }
		   	      ?>
		   	      <table>
		   	      </tr>
		   				            <input type = "hidden" name = "busname" value="<?php echo $busname; ?>">
		   							<input type = "hidden" name = "class" value="<?php echo $class; ?>">
		   							<input type = "hidden" name = "price" value="<?php echo $price; ?>">
		   							<input type = "hidden" name = "ori" value="<?php echo $ori; ?>">
		   							<input type = "hidden" name = "des" value="<?php echo $des; ?>">
		   							<input type = "hidden" name = "name" value="<?php echo $username; ?>">
		   							<input type = "hidden" name = "time" value="<?php echo $time; ?>">
		   							<input type = "hidden" name = "seat" value="<?php echo $seat; ?>">
		   							<input type = "hidden" name = "date" value="<?php echo $date; ?>">
		   							<input type = "hidden" name = "id" value="<?php echo $id; ?>">
		   							<input type = "hidden" name = "a" value="<?php echo $a=2; ?>">
		   				
		   				
		   				</tr>
		   			</table>
		   	      <input type="submit" name="submit">
		   	  </form>


		   		<?php
		   	}
		   }
		   
		   ?>

	  </div>

	</div>
	
</body>

</html>
</body>
</html>
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
			var ori = document.getElementById("origin").value;
			var des = document.getElementById("destination").value;
			var busn = document.getElementById("busName").value;
			var class = document.getElementById("class").value;
			var price = document.getElementById("price").value;
			var time = document.getElementById("time").value;
			var date = document.getElementById("date").value;
			var ns = document.getElementById("seatno").value;
			var s1 = document.getElementById("s1").value;
			var s2 = document.getElementById("s2").value;
			var s3 = document.getElementById("s3").value;
			var s4 = document.getElementById("s4").value;

			

			
			if(ori == ''){
				alert("Please,Enter Your Name.");
				return false;
			}
			else if(des == ''){
				alert("Please,Enter Your Email.");
				return false;
			}
			else if(busn == ''){
				alert("Please,Enter Your password.");
				return false;
			}
			else if(class == ''){
				alert("Please,Enter Confirm Password.");
				return false;
			}
			else if(price == ''){
				alert("Please,Enter phoneNo.");
				return false;
			}
			else if(time == ''){
				alert("Please,Enter Aige.");
				return false;
			}
			else if(date == ''){
				alert("Please,Enter Gender.");
				return false;
			}
			else if(ns == ''){
				alert("Password and Confirm Password Not Match!");
				return false;
			}
			
			return true;
		}
    </script>
</head>

<body background="images/3.jpg">
	<?php
	 $username=$ori=$des=$busn= $class=$price=$time=$date= $ns=$s1=$s2=$s3=$s4='';
	
		if($_SERVER["REQUEST_METHOD"] == "GET"){
			        $id = $_GET['id'];
			        $username = $_GET['name'];
                    $ori = $_GET['origin']; 
	   			    $des = $_GET['destination'];
	   			    $busn = $_GET['busName'];
	   			    $class = $_GET['class'];
	   			    $price = $_GET['price'];
	   			    $time = $_GET['time'];
	   			    $date = $_GET['date'];
	   			    $ns = $_GET['seatno'];
	   				$s1 = $_GET['s1'];
	   			    $s2 = $_GET['s2'];
	   			    $s3 = $_GET['s3'];
	   			    $s4 = $_GET['s4'];

	  	}
    ?>

	 <div>
		<div class="header-div">
	        <h2>MEDALLION Online Bus Reservation System</h2>
	    </div>
		<div class="id">
			<h2 style="color:black">Update From</h2>
			<form action="Update1.php" method="get">
				
                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                <label for="origin">Name</label>
	   			<input type="text" id="name" name="name" value="<?php echo $username; ?>" >
				<label for="origin">Origin</label>
	   			<input type="text" id="origin" name="ori" value="<?php echo $ori; ?>" >
	   			<label for="Des">Destination</label>
	   			<input type="text" id="des" name="des" value="<?php echo $des; ?>">
	   			<label for="busn">Bus Name</label>
	   			<input type="text" id="busn" name="busn" value="<?php echo $busn; ?>">
	   			<label for="Class">Class</label>
	   			<input type="text" id="class" name="class" value="<?php echo $class; ?>">
	   			<label for="price">Price</label>
	   			<input type="text" id="price" name="price" value="<?php echo $price; ?>" >
	   			<label for="time">Time</label>
	   			<input type="text" id="time" name="time" value="<?php echo $time; ?>" >
	   			<label for="date">Date</label>
	   			<input type="text" id="date" name="date" value="<?php echo $date; ?>" >

	   			<label for="seatno">Number of Seat</label>
	   			<input type="text" id="seatno" name="seatno" value="<?php echo $ns; ?>" >

	   			<label for="s1">S1</label>
	   			<input type="text" id="s1" name="s1" value="<?php echo $s1; ?>" >
	   			<label for="s2">S2</label>
	   			<input type="text" id="s2" name="s2" value="<?php echo $s2; ?>" >
	   			<label for="s3">S3</label>
	   			<input type="text" id="s3" name="s3" value="<?php echo $s3; ?>" >
	   			<label for="s4">S4</label>
	   			<input type="text" id="s4" name="s4" value="<?php echo $s4; ?>" >

               
	   			
	   			
	   			
	   			<input type="submit" value="submit" onclick="if(onSubmit()) { return true; } else { return false; }" />     
			</form>
		</div>
		<div class="footer">
			Copyright &copy; FHT.com
		</div>
	</div>

</body>
</html>
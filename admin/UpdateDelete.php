<!DOCTYPE html>
<html>
<head>
	<title>Update Delete</title>
</head>
<body>
	  <?php
	  		$id = '';$action = '';
	  		if($_SERVER["REQUEST_METHOD"] == "GET"){
	  			  $id = $_GET['id'];
	  			  $name= $_GET['name'];
	  			  $action = $_GET['action'];
	  			  $link = mysqli_connect("localhost","root","","busreservee");
	  			  if($action == "delete"){
	  			  		$sql = " delete from admininfo where id = '$id' ";
	  			  		if(mysqli_query($link , $sql)){
	  			  			header("Location: AdminHome.php");
	  			  			exit();
	  			  		}
	  			  }
	  			  else if($action == "delete1"){
                         	$sql = " delete from ticketinfo where id = '$id' ";
	  			  		if(mysqli_query($link , $sql)){
	  			  			header("Location: book.php");
	  			  			exit();
	  			  		}
                          
	  			  }
	  			   else if($action == "delete2"){
                         	$sql = " delete from userinfo where id = '$id' ";
	  			  		if(mysqli_query($link , $sql)){
	  			  			header("Location: info.php");
	  			  			exit();
	  			  		}
                          
	  			  }

	  			  else if($action == "edit2"){
	  			  		$name = '';$email = '';$password = '';$phoneNo = '';$gender = '';$age = '';
	  			  		$sql = " select * from userinfo where id = '$id' ";
	  			  		$result = mysqli_query($link , $sql);
						if($result){
							 if(mysqli_num_rows($result) > 0){
							 	 while($row = mysqli_fetch_array($result)){
							 	 	  $id = $row['id'];
							 	 	  $name = $row['name']; 
							 	 	  $password = $row['password'];
							 	 	  $email = $row['email'];
							 	 	  $phoneNo = $row['phoneNo'];
							 	 	  $gender = $row['gender'];
							 	 	  $age = $row['age'];
							 	}
							 	mysqli_free_result($result);
							 }
							 else{
							 	 echo "No Record selected from this database";
							 }
						}

						$url = "Edit2.php?id=$id&name=$name&email=$email&password=$password&phoneNo=$phoneNo&gender=$gender&age=$age";
						header("Location: $url");
	  			  }

	  			  else if($action == "edit"){
	  			  		$name = '';$email = '';$password = '';$phoneNo = '';$gender = '';$age = '';
	  			  		$sql = " select * from admininfo where id = '$id' ";
	  			  		$result = mysqli_query($link , $sql);
						if($result){
							 if(mysqli_num_rows($result) > 0){
							 	 while($row = mysqli_fetch_array($result)){
							 	 	  $id = $row['id'];
							 	 	  $name = $row['name']; 
							 	 	  $password = $row['password'];
							 	 	  $email = $row['email'];
							 	 	  $phoneNo = $row['phoneNo'];
							 	 	  $gender = $row['gender'];
							 	 	  $age = $row['age'];
							 	}
							 	mysqli_free_result($result);
							 }
							 else{
							 	 echo "No Record selected from this database";
							 }
						}

						$url = "Edit.php?id=$id&name=$name&email=$email&password=$password&phoneNo=$phoneNo&gender=$gender&age=$age";
						header("Location: $url");
	  			  }
	  			  else if($action == "Edit1"){
	  			  		
	  			  		$sql = " select * from ticketinfo where ID = '$id' ";
	  			  		$result = mysqli_query($link , $sql);
						if($result){
							 if(mysqli_num_rows($result) > 0){
							 	 while($row = mysqli_fetch_array($result)){
							 	 	          $id = $row['ID'];
							 	 	          $name = $row['name'];
	   								 	 	  $ori = $row['origin']; 
	   								 	 	  $des = $row['destination'];
	   								 	 	  $busn = $row['busName'];
	   								 	 	  $class = $row['class'];
	   								 	 	  $price = $row['price'];
	   								 	 	  $time = $row['time'];
	   								 	 	  $date = $row['date'];
	   								 	 	  $ns = $row['seatno'];
	   								 	 	  $s1 = $row['s1'];
	   								 	 	  $s2 = $row['s2'];
	   								 	 	  $s3 = $row['s3'];
	   								 	 	  $s4 = $row['s4'];
							 	}
							 	mysqli_free_result($result);
							 }
							 else{
							 	 echo "No Record selected from this database";
							 }
						}
						
						$url = "Edit1.php?id=$id&name=$name&origin=$ori&destination=$des&busName=$busn&class=$class&price=$price&time=$time&seatno=$ns&date=$date&s1=$s1&s2=$s2&s3=$s3&s4=$s4";
						header("Location: $url");
	  			  }


	  		}
         if($_SERVER["REQUEST_METHOD"] == "POST"){

	  			 $id = $_POST['id'];
	  			 $action = $_POST['action'];
	  			 $name = $_POST['name'];
	  			 $password = $_POST['password'];
	  			 $phoneNo = $_POST['phoneNo'];
	  			 $age = $_POST['age'];
	  			 $email = $_POST['email'];
	  			 $gender = $_POST['gender'];
	  			 $link = mysqli_connect("localhost","root","","busreservee");
	  			 if($action == "createEdit"){
	  			 	 $sql = " update admininfo set name = '$name',email = '$email',password = '$password',phoneNo = '$phoneNo',age = '$age',gender = '$gender' where id = '$id' ";
	  			 	 if(mysqli_query($link , $sql)){
	  			  			header("Location: AdminHome.php");
	  			  			exit();
	  			  		}
	  			 }
	  		}
	  		
	  	
	  ?>
</body>
</html>
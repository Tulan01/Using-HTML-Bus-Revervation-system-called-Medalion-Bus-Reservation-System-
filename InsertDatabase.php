<!DOCTYPE html>
<html>
<head>
	<title>Insert Database</title>
</head>
<body>
	  <?php
	  		$action = '';$name = '';$password = '';$email = '';$phoneNo = '';$age;$gender = '';
	  		if($_SERVER["REQUEST_METHOD"] == "POST"){
	  			 // $action = $_POST['action'];
		  		  $name = $_POST['name'];
		  		  $password = $_POST['password'];
		  		  $email = $_POST['email'];
		  		  $phoneNo = $_POST['phoneNo'];
		  		  $age = $_POST['age'];
		  		  $gender = $_POST['gender'];
	  			  $action = $_POST['action'];
	  			  
	  			  $link = mysqli_connect("localhost" , "root" , "" , "busreservee");
	  			  if($action == "userInfo"){
	  			        $sql = "INSERT INTO userinfo (name,email,password,phoneNo,age,gender) VALUES('$name','$email','$password','$phoneNo',$age,'$gender')";
	  			        if(mysqli_query($link , $sql)){
                             header("Location: userlog.php");
                             exit();
                        }

	  			  }
	  			  elseif($action == "adminInfo"){
	  			  
	  			        $sql = "INSERT INTO admin (name,email,password,phoneNo,age,gender) VALUES('$name','$email','$password','$phoneNo',$age,'$gender')";
	  			        if(mysqli_query($link , $sql)){
                             header("Location: AdminHome.php");
                             exit();
                        }
	  			  }
                  

	  		}
	  ?>
</body>
</html>
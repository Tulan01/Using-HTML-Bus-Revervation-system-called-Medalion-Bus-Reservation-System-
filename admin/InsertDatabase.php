<!DOCTYPE html>
<html>
<head>
	<title>Insert Database</title>
</head>
<body>
	  <?php
	  		$action = '';$name = '';$password = '';$email = '';$phoneNo = '';$age;$gender = '';
	  		if($_SERVER["REQUEST_METHOD"] == "POST"){
	  			  $action = $_POST['action'];
	  			  if (!empty($_POST['name'])) {
	  			  		$name = $_POST['name'];
	  			  }
	  			  if (!empty($_POST['password'])) {
	  			  		$password = $_POST['password'];
	  			  }
	  			  if (!empty($_POST['email'])) {
	  			  		$email = $_POST['email'];
	  			  }
	  			  if (!empty($_POST['phoneNo'])) {
	  			  		$phoneNo = $_POST['phoneNo'];
	  			  }
	  			  if (!empty($_POST['age'])) {
	  			  		$age = $_POST['age'];
	  			  }
	  			  if (!empty($_POST['gender'])) {
	  			  		$gender = $_POST['gender'];
	  			  }
	  			  $link = mysqli_connect("localhost" , "root" , "" , "busreservee");
	  			  if($action == "userInfo"){
	  			        $sql = "INSERT INTO userinfo (name,email,password,phoneNo,age,gender) VALUES('$name','$email','$password','$phoneNo',$age,'$gender')";
	  			        if(mysqli_query($link , $sql)){
                             header("Location: Home.php");
                             exit();
                        }

	  			  }
	  			  elseif($action == "adminInfo"){
	  			  
	  			        $sql = "INSERT INTO admininfo (name,email,password,phoneNo,age,gender) VALUES('$name','$email','$password','$phoneNo',$age,'$gender')";
	  			        if(mysqli_query($link , $sql)){
                             header("Location: AdminHome.php");
                             exit();
                        }
	  			  }
                  

	  		}
	  ?>
</body>
</html>
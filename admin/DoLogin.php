<!DOCTYPE html>
<html>
<head>
	<title>Do Login</title>
</head>
<body>
	<?php
		$name = '';$password = '';$action = '';
		if($_SERVER["REQUEST_METHOD"] == "POST"){
				$action = $_POST['action'];
				$name = $_POST['name'];
				$password = $_POST['password'];
				if($action == "userLogin"){
					 $link = mysqli_connect("localhost" , "root" , "" , "busreservee");
					 $sql = " select * from userinfo where name = '$name' and password = '$password' ";
					 if($result = mysqli_query($link , $sql)){
					 		if(mysqli_num_rows($result) > 0){
					 			$url="UserH.php?name=$name";
					 			  header("Location: $url");

					 		}
					 		else{
					 			
					 			header("Location: userLog.php");
					 			exit();
					 		}
					 }
					 else{
					 	 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
					 }
				}
				elseif ($action == "adminLogin") {
					$link = mysqli_connect("localhost" , "root" , "" , "busreservee");
					 $sql = " select * from admininfo where name = '$name' and password = '$password' ";
					 if($result = mysqli_query($link , $sql)){
					 		if(mysqli_num_rows($result) > 0){
					 			  header("Location: AdminHome.php");
					 		}
					 		else{
					 			header("Location: index.php");
					 			exit();
					 		}
					 }
					 else{
					 	 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
					 }
				}
		}
	?>
	      $url = "Edit.php?name=$name";
			header("Location:"UserH.php" $url");
</body>
</html>
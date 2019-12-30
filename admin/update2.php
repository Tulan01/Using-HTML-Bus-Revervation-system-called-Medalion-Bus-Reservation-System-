 <?php





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
	  			 	 $sql = " update userinfo set name = '$name',email = '$email',password = '$password',phoneNo = '$phoneNo',age = '$age',gender = '$gender' where id = '$id' ";
	  			 	 if(mysqli_query($link , $sql)){
	  			  			header("Location: info.php");
	  			  			exit();
	  			  		}
	  			 }
	  		}
	  		?>
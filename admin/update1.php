<?php
                    

                if($_SERVER["REQUEST_METHOD"] == "GET"){
                	$id = $_GET['id'];
                   $username = $_GET['name'];
                    $ori = $_GET['ori']; 
	   			    $des = $_GET['des'];
	   			    $busn = $_GET['busn'];
	   			    $class = $_GET['class'];
	   			    $price = $_GET['price'];
	   			    $time = $_GET['time'];
	   			    $date = $_GET['date'];
	   			    $ns = $_GET['seatno'];
	   				$s1 = $_GET['s1'];
	   			    $s2 = $_GET['s2'];
	   			    $s3 = $_GET['s3'];
	   			    $s4 = $_GET['s4'];

	  			 $link = mysqli_connect("localhost","root","","busreservee");
	  			 
	  			 	 $sql = " update ticketinfo set name= '$username', origin = '$ori',destination = '$des',busName = '$busn',class = '$class',price = '$price',time = '$time',date = '$date',seatno = '$ns',s1 = '$s1',s2 = '$s2',s3 = '$s3',s4 = '$s4' where ID = '$id' ";
	  			 	 if(mysqli_query($link , $sql)){
	  			  			header("Location: book.php");
	  			  			exit();
	  			 }
	  		}
	  		?>
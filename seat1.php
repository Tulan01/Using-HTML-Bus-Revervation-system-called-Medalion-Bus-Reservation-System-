<html>
<head>
	<title></title>
</head>
<body>
<?php
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		$ori=$_GET['ori'];
		$des=$_GET['des'];
		$busname=$_GET['busname'];
		$class=$_GET['class'];
		$price=$_GET['price'];
		$seat=$_GET['seat'];
		$username=$_GET['name'];
		$time=$_GET['time'];
		$date=$_GET['date'];
		$id=$_GET['id'];
		$a=$_GET['a'];
            $st1=$st2=$st3=$st4='';
              
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
	  $amount=$seat*$price;        
	  
	
 $link = mysqli_connect("localhost" , "root" , "" , "busreservee");
    
	  			 
    $sql = "INSERT INTO ticketinfo (name,origin,destination,busName,class,price,time,date,seatno,s1,s2,s3,s4) VALUES( '$username','$ori','$des','$busname','$class','$amount','$time','$date','$seat','$st1','$st2','$st3','$st4')";
      
      


	  if(mysqli_query ($link , $sql)){

                  
	  		if($a==1){	          	
            $url = "123.php?id=$id&ori=$ori&des=$des&busname=$busname&class=$class&seat=$seat&amount=$amount&name=$username&time=$time&date=&date&st1=$st1&st2=$st2&st3=$st3&st4=$st4&price=$price";
		    header("Location: $url");
                         exit();
                  }
             else if($a==2){
             	$url = "ticket.php?id=$id&ori=$ori&des=$des&busname=$busname&class=$class&seat=$seat&amount=$amount&name=$username&time=$time&date=&date&st1=$st1&st2=$st2&st3=$st3&st4=$st4&price=$price";
		          header("Location: $url");
                         exit();
             }
         }
                         
               
?>
</body>
</html>
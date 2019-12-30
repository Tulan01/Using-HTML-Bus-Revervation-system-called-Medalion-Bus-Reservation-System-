<?php
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		$ori=$_GET['ori'];
        $des=$_GET['des'];
        $busname=$_GET['busname'];
        $class=$_GET['class'];
        $amount=$_GET['amount'];
        $seat=$_GET['seat'];
        $username=$_GET['name'];
        $time=$_GET['time'];
        $date=$_GET['date'];
        $id=$_GET['id'];
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
    
    
    $link = mysqli_connect("localhost" , "root" , "" , "busreservee");
	 
	
           if($seat==4){
          if($st1=="A1" || $st1=="B1" || $st1=="C1" || $st1=="D1" || $st1=="E1"){
             $sql ="UPDATE busseat1 SET s1=Null
                 WHERE s1='$st1'";
            }
            if($st1=="A2" || $st1=="B2" || $st1=="C2"|| $st1=="D2" || $st1=="E2"){
             $sql ="UPDATE busseat1 SET s2=Null
                 WHERE s2='$st1'";
            }
            if($st1=="A3" || $st1=="B3" || $st1=="C3"|| $st1=="D3" || $st1=="E3"){
             $sql ="UPDATE busseat1 SET s3=Null
                 WHERE s3='$st1'";
            }
            if($st1=="A4" || $st1=="B4" || $st1=="C4"|| $st1=="D4" || $st1=="E4"){
             $sql ="UPDATE busseat1 SET s4=Null
                 WHERE s4='$st1'";
            }
            if( mysqli_query ($link , $sql)){
       
                }


         if($st2=="A1" || $st2=="B1" || $st2=="C1"|| $st1=="D1" || $st1=="E1"){
             $sql1 ="UPDATE busseat1 SET s1=Null
                 WHERE s1='$st2'";
            }
            if($st2=="A2" || $st2=="B2" || $st2=="C2"|| $st1=="D2" || $st1=="E2"){
             $sql1 ="UPDATE busseat1 SET s2=Null
                 WHERE s2='$st2'";
            }
            if($st2=="A3" || $st2=="B3" || $st2=="C3"|| $st1=="D3" || $st1=="E3"){
             $sql1 ="UPDATE busseat1 SET s3=Null
                 WHERE s3='$st2'";
            }
            if($st2=="A4" || $st2=="B4" || $st2=="C4"|| $st1=="D4" || $st1=="E4"){
             $sql1 ="UPDATE busseat1 SET s4=Null
                 WHERE s4='$st2'";
            }
          if( mysqli_query ($link , $sql1)){
        
             }


         if($st3=="A1" || $st3=="B1" || $st3=="C1"|| $st1=="D1" || $st1=="E1"){
             $sql2 ="UPDATE busseat1 SET s1=Null
                 WHERE s1='$st3'";
            }
            if($st3=="A2" || $st3=="B2" || $st3=="C2"|| $st1=="D2" || $st1=="E2"){
             $sql2 ="UPDATE busseat1 SET s2=Null
                 WHERE s2='$st3'";
            }
            if($st3=="A3" || $st3=="B3" || $st3=="C3"|| $st1=="D3" || $st1=="E3"){
             $sql2 ="UPDATE busseat1 SET s3=Null
                 WHERE s3='$st3'";
            }
            if($st3=="A4" || $st3=="B4" || $st3=="C4"|| $st1=="D4" || $st1=="E4"){
             $sql2 ="UPDATE busseat1 SET s4=Null
                 WHERE s4='$st3'";
            }
        if( mysqli_query ($link , $sql2)){
        	
        }



        if($st4=="A1" || $st4=="B1" || $st4=="C1"|| $st1=="D1" || $st1=="E1"){
             $sql4 ="UPDATE busseat1 SET s1=Null
                 WHERE s1='$st4'";
            }
            if($st4=="A2" || $st4=="B2" || $st4=="C2"|| $st1=="D2" || $st1=="E2"){
             $sql3 ="UPDATE busseat1 SET s2=Null
                 WHERE s2='$st4'";
            }
            if($st4=="A3" || $st4=="B3" || $st4=="C3"|| $st1=="D3" || $st1=="E3"){
             $sql3 ="UPDATE busseat1 SET s3=Null
                 WHERE s3='$st4'";
            }
            if($st4=="A4" || $st4=="B4" || $st4=="C4"|| $st1=="D4" || $st1=="E4"){
             $sql3 ="UPDATE busseat1 SET s4=Null
                 WHERE s4='$st4'";
            }
        if( mysqli_query ($link , $sql3)){
        	
            }
        }

        if($seat==3){

       if($st1=="A1" || $st1=="B1" || $st1=="C1"|| $st1=="D1" || $st1=="E1"){
             $sql ="UPDATE busseat1 SET s1=Null
                 WHERE s1='$st1'";
            }
            if($st1=="A2" || $st1=="B2" || $st1=="C2"|| $st1=="D2" || $st1=="E2"){
             $sql ="UPDATE busseat1 SET s2=Null
                 WHERE s2='$st1'";
            }
            if($st1=="A3" || $st1=="B3" || $st1=="C3"|| $st1=="D3" || $st1=="E3"){
             $sql ="UPDATE busseat1 SET s3=Null
                 WHERE s3='$st1'";
            }
            if($st1=="A4" || $st1=="B4" || $st1=="C4"|| $st1=="D4" || $st1=="E4"){
             $sql ="UPDATE busseat1 SET s4=Null
                 WHERE s4='$st1'";
            }
            if( mysqli_query ($link , $sql)){
       
                }


         if($st2=="A1" || $st2=="B1" || $st2=="C1"|| $st1=="D1" || $st1=="E1"){
             $sql1 ="UPDATE busseat1 SET s1=Null
                 WHERE s1='$st2'";
            }
            if($st2=="A2" || $st2=="B2" || $st2=="C2"|| $st1=="D2" || $st1=="E2"){
             $sql1 ="UPDATE busseat1 SET s2=Null
                 WHERE s2='$st2'";
            }
            if($st2=="A3" || $st2=="B3" || $st2=="C3"|| $st1=="D3" || $st1=="E3"){
             $sql1 ="UPDATE busseat1 SET s3=Null
                 WHERE s3='$st2'";
            }
            if($st2=="A4" || $st2=="B4" || $st2=="C4"|| $st1=="D4" || $st1=="E4"){
             $sql1 ="UPDATE busseat1 SET s4=Null
                 WHERE s4='$st2'";
            }
          if( mysqli_query ($link , $sql1)){
        
             }


         if($st3=="A1" || $st3=="B1" || $st3=="C1"|| $st1=="D1" || $st1=="E1"){
             $sql2 ="UPDATE busseat1 SET s1=Null
                 WHERE s1='$st3'";
            }
            if($st3=="A2" || $st3=="B2" || $st3=="C2"|| $st1=="D2" || $st1=="E2"){
             $sql2 ="UPDATE busseat1 SET s2=Null
                 WHERE s2='$st3'";
            }
            if($st3=="A3" || $st3=="B3" || $st3=="C3"|| $st1=="D3" || $st1=="E3"){
             $sql2 ="UPDATE busseat1 SET s3=Null
                 WHERE s3='$st3'";
            }
            if($st3=="A4" || $st3=="B4" || $st3=="C4"|| $st1=="D4" || $st1=="E4"){
             $sql2 ="UPDATE busseat1 SET s4=Null
                 WHERE s4='$st3'";
            }
        if( mysqli_query ($link , $sql2)){
            
        }
        }
        if($seat==2){
           if($st1=="A1" || $st1=="B1" || $st1=="C1"|| $st1=="D1" || $st1=="E1"){
             $sql ="UPDATE busseat1 SET s1=Null
                 WHERE s1='$st1'";
            }
            if($st1=="A2" || $st1=="B2" || $st1=="C2"|| $st1=="D2" || $st1=="E2"){
             $sql ="UPDATE busseat1 SET s2=Null
                 WHERE s2='$st1'";
            }
            if($st1=="A3" || $st1=="B3" || $st1=="C3"|| $st1=="D3" || $st1=="E3"){
             $sql ="UPDATE busseat1 SET s3=Null
                 WHERE s3='$st1'";
            }
            if($st1=="A4" || $st1=="B4" || $st1=="C4"|| $st1=="D4" || $st1=="E4"){
             $sql ="UPDATE busseat1 SET s4=Null
                 WHERE s4='$st1'";
            }
            if( mysqli_query ($link , $sql)){
       
                }


         if($st2=="A1" || $st2=="B1" || $st2=="C1"|| $st1=="D1" || $st1=="E1"){
             $sql1 ="UPDATE busseat1 SET s1=Null
                 WHERE s1='$st2'";
            }
            if($st2=="A2" || $st2=="B2" || $st2=="C2"|| $st1=="D2" || $st1=="E2"){
             $sql1 ="UPDATE busseat1 SET s2=Null
                 WHERE s2='$st2'";
            }
            if($st2=="A3" || $st2=="B3" || $st2=="C3"|| $st1=="D3" || $st1=="E3"){
             $sql1 ="UPDATE busseat1 SET s3=Null
                 WHERE s3='$st2'";
            }
            if($st2=="A4" || $st2=="B4" || $st2=="C4"|| $st1=="D4" || $st1=="E4"){
             $sql1 ="UPDATE busseat1 SET s4=Null
                 WHERE s4='$st2'";
            }
          if( mysqli_query ($link , $sql1)){
        
             }
        }
        if($seat==1){
            if($st1=="A1" || $st1=="B1" || $st1=="C1"|| $st1=="D1" || $st1=="E1"){
             $sql ="UPDATE busseat1 SET s1=Null
                 WHERE s1='$st1'";
            }
            if($st1=="A2" || $st1=="B2" || $st1=="C2"|| $st1=="D2" || $st1=="E2"){
             $sql ="UPDATE busseat1 SET s2=Null
                 WHERE s2='$st1'";
            }
            if($st1=="A3" || $st1=="B3" || $st1=="C3"|| $st1=="D3" || $st1=="E3"){
             $sql ="UPDATE busseat1 SET s3=Null
                 WHERE s3='$st1'";
            }
            if($st1=="A4" || $st1=="B4" || $st1=="C4"|| $st1=="D4" || $st1=="E4"){
             $sql ="UPDATE busseat1 SET s3=Null
                 WHERE s3='$st1'";
            }
            if( mysqli_query ($link , $sql)){
       
                }
             }
       
                  $url = "ticket.php?id=$id&ori=$ori&des=$des&busname=$busname&class=$class&seat=$seat&amount=$amount&name=$username&time=$time&date=&date&st1=$st1&st2=$st2&st3=$st3&st4=$st4&price=$price";
            header("Location: $url"); 

                    
            
                        
?>
</body>
</html>
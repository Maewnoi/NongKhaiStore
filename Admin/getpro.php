<?php
       session_start();
        $con = mysqli_connect("localhost", "root", "", "test");
  		mysqli_set_charset($con, "utf8");


		$name= $_GET["name"];
		$st_time= $_GET ["st_time"];
		$ed_time  = $_GET ["ed_time"];
    	$des = $_GET ["des"];
		$p= $_GET ["p"];
		$s = $_GET ["s"];
    
         $query = "SELECT * FROM `pro`";
         $res = mysqli_query($con,$query);

      
         		$query = "INSERT INTO `pro` (`id`, `name`, `st_time`, `ed_time`, `des`, `price`, `stock`) VALUES (NULL, '$name', '$st_time', '$ed_time', '$des', '$p', '$s')";
         	mysqli_query($con, $query);

		     header("Location: Admin2.html");
		      echo "บันทึกข้อมูลเรียบร้อย";
        
         	
       
       
         	
		
           
		//$query = "INSERT INTO students VALUES ('','$stu_id','$firstname','$lastname','$nickname','$major','$mobile','')";
		//echo $query;

		
?>

<?php    
      echo "hi"; 
        $host = "localhost";  
        $user = "root";  
        $password = "Ak2001@rox";  
        $db_name = "lab";  
        
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        } 
           
          $trackid = $_POST['trackid'];     
           echo $trackid;   
      
            $sql = "select *from Packages where trackid = '$trackid' and password = '$password'";   
            $result = mysqli_query($con, $sql); 
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
            $count = mysqli_num_rows($result);   
            if($count == 1){  
                header("Location: status.php");
            }  
            else{  
                session_start();
                $_SESSION["message"]="error";
                header("Location:index.php"); 
            }
        
            mysqli_close($con);
?> 
 
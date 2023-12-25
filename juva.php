<?php 
        $fname = $_REQUEST['fname']; 
        $lname = $_REQUEST['ldname']; 
        $email = $_REQUEST['Email'];   
        $phonenum = $_REQUEST['phonenumber'];  
        $pasword = $_REQUEST['password'];  
        

        if(isset($_POST['btntest'])){ 
            $host = "localhost"; 
            $user = "root"; 
            $password =""; 
            $db = "customer"; 

            @$connect= mysqli_connect($host,$user,$password,$db);
            $insert= "insert into sign_in values('$fname','$lname','$email','$phonenum','$pasword')";
            mysqli_query($connect,$insert);
            if($connect){
                
                echo("<h1 style=color:green;> Your Registartion is Done.</h1>");
                

            }
            else{
                echo("<h1 style=color:red;> Your Registartion is Failed!!</h1>");
            }
        
        }
        
?>


<h1>Form submission result</h1>
<?php
if(isset($_POST["submit"])){
    $phone_number=$_POST["phonenumber"];
    $email =$_POST["email"];
    $password =$_POST["password"];
   
    if(empty($phone_number)){
        echo "Phone number require! <br><br>";
  
      
    }
    else{
        echo "Phone number $phone_number <br><br>";
        
        
        
    }
        if(empty($email)){
        echo "Email require! <br><br>";
  
      
    }
    else{
        echo "Email : $email <br><br>";
        
        
        
    }
        if(empty($password)){
        echo "Password require! <br><br>";
  
      
    }
    else{
        echo "Password is set! <br><br>";
        
        
        
    }
    if(isset($_POST["gender"])){
        $gender = $_POST["gender"];
        echo "$gender <br><br>";
    }
    else{
        echo "Please chose the selection! <br><br>";
    }
        if(isset($_POST["department"])){
        $department = $_POST["department"];
        echo "You are form $department <br><br>";
    }
    else{
        echo "Please chose the selection! <br><br>";
    }
    
    
}




?>
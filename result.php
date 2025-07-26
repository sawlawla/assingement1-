<h1>Form submission result</h1>
<?php
if(isset($_POST["submit"])){
    $array = [
        "phonenumber" => "Phone number",
        "email" => "Email",
        "password" => "Password",
        "gender" => "Gender",
        "department" => "Department"
    ];
    foreach ($array as $key => $value){
        if(empty($_POST["$key"])){
            echo "$value is require!<br><br>";
        }
        else{
       if($key == "phonenumber"){
        echo "Phonenumber : $_POST[$key] <br><br>";
       }
        elseif($key == "email"){
        echo "Email : $_POST[$key] <br><br>";
       }
       elseif($key == "password"){
        echo "$value is set <br><br>";
       }
       if($key == "gender"){
        echo "$value : $_POST[$key] <br><br>";
       }
        if($key == "department"){
        echo "$value : $_POST[$key] <br><br>";
       }
    
        }

    }







}

 




?>
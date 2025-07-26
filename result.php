<h1>Form submission result</h1>
<?php
if (isset($_POST["submit"])) {
    $array = [
        "first_name" => "First Name",
        "last_name" => "Last name",
        "father_name" => "Father name",
        "day" => "Day",
        "month" => "Month",
        "year" => "Year",
        "phonenumber" => "Phone number",
        "email"       => "Email",
        "password"    => "Password",
        "gender"      => "Gender",
        "department"  => "Department",
        "course" => "Course",
        "city"=> "City",
        "address" => "Address"
    ];

    foreach ($array as $key => $value) {
        if (empty($_POST[$key])) {
            echo "$value is required!<br><br>";
     } else {
            if ($key == "password") {
            echo "$value is set<br><br>";
         }
         elseif ($key == "day") {
    echo "Date of birth : " . $_POST[$key] . "/";
}
elseif ($key == "month") {
    echo $_POST[$key] . "/ ";
}
elseif ($key == "year") {
    echo $_POST[$key] . "<br><br>";
}
       
    
         
        else {
            echo "$value : " . $_POST[$key] . "<br><br>";
        }
    }
    }
}
echo "<br><br><br>"; 
foreach($_POST as $key=>$value){
    echo "{$key} = {$value}<br><br>";
}

?>
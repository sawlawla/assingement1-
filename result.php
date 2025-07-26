<h1>Form submission result</h1>
<?php
if (isset($_POST["submit"])) {
    $array = [
        "phonenumber" => "Phone number",
        "email"       => "Email",
        "password"    => "Password",
        "gender"      => "Gender",
        "department"  => "Department"
    ];

    foreach ($array as $key => $value) {
        if (empty($_POST[$key])) {
            echo "$value is required!<br><br>";
     } else {
            if ($key == "password") {
            echo "$value is set<br><br>";
         } else {
            echo "$value : " . $_POST[$key] . "<br><br>";
        }
    }
    }
}
?>
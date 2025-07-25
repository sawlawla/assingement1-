<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <form action = "result.php" method = "post">
<label>Mobile no.:+95 -</label>
<input type = "number" name = "phonenumber"><br><br>    
<label>Email:</label>
<input type = "email" name = "email"><br><br>
<label>Password:</label>
<input type = "password" name = "password"><br><br>
<label>Gender:</label>
<input type = "radio" name="gender" value = "male" > Male <input type = "radio" name="gender" value = "female" >Female<br><br>
<label>Department:</label><br>
<input type = "checkbox" name="department" value = "English department"> English 
<input type = "checkbox" name="department" value = "Computer department">Computer
<input type = "checkbox" name="department" value = "Business department" >Business<br><br>
<input type = "submit" name = "submit" value = "Register">
</form>

</body>
</html>
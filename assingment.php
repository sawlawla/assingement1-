<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <h1>Student Registration Form</h1>
</head>

<body>
    <form action = "result.php" method = "post"> <!--MayPhoPwint!-->
      <label>Student's Name:</label>
        <input type="text" name="first_name" placeholder= "first name" size="15">-<input type="text" name="last_name" placeholder="Last name"size="15"><br><br>

        <label>Father's Name:</label>
        <input type="text" name="father_name" size="30"><br><br>

        <label>Date of Birth:</label><br>
        <select name="day">
            <option value="">Day</option>
            <?php for ($i = 1; $i <= 31; $i++) { echo "<option value='$i'>$i</option>"; } ?>
        </select>

        <select name="month">
            <option value="">Month</option>
            <?php
            for ($m = 1; $m <= 12; $m++) {
                $month = date('F', mktime(0, 0, 0, $m, 10));
                echo "<option value='$m'>$month</option>";
            }
            ?>
        </select>

        <select name="year">
            <option value="">Year</option>
            <?php 
            $currentYear = date('Y');
            for ($y = $currentYear; $y >= $currentYear - 100; $y--) {
                echo "<option value='$y'>$y</option>";
            }
            ?>
        </select><br><br><!--MayPhoPwint!-->

<label>Mobile no.:+95 -</label><!--Saw LAW LA!-->
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
<input type = "checkbox" name="department" value = "Business department" >Business<br><br><!--SawLawla!-->

Course:<!--Mosselinthat!-->
<label for="course">Course:</label>
<select name="course" id="course">
  <option value="" disabled selected>Select Course</option>
  <option value="Progamming">Progamming</option>
  <option value="Game Development">Game Development</option>
  <option value="Networking">Networking</option>
</select><br><br>

City: <input type="text" name="city"><br><br>

Address: <textarea name="address" rows="3"></textarea><br><br>


<input type = "submit" name = "submit" value = "Register"><!--Mosselinthat!-->
</form>

</body>
</html>
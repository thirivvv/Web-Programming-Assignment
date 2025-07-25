<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
    body {
      
      font-family: Arial;
    }
   
    </style>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="result.php" method="POST">
     
     Student name: 
    <input type="text" name="fname" placeholder="First Name"> 
    <input type="text" name="lname" placeholder="Last Name"><br><br>

    Father's name: 
    <input type="text" name="father"><br><br>
    

    Date of birth:
    <input type="text" name="dob-day" placeholder="Day" size="2"> -
    <input type="text" name="dob-month" placeholder="Month" size="2"> -
    <input type="text" name="dob-year" placeholder="Year" size="4">
    <span>(DD-MM-YYYY)</span><br><br>
    
    
    
    
    
    
    Gender: 
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female<br><br>

    Department:<br>
    <input type="checkbox" name="department[]" value="English"> English
    <input type="checkbox" name="department[]" value="Computer"> Computer
    <input type="checkbox" name="department[]" value="Business"> Business<br><br>

    Course: 
    <select name="course">
      <option value="">Select Course</option>
      <option value="Web Development">Web Development</option>
      <option value="Networking">Networking</option>
      <option value="Design">Design</option>
    </select><br><br>






    </form>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
    body {
      
      font-family: Arial;
    }
   
    </style>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="result.php" method="POST">
     
     Student name: 
    <input type="text" name="fname" placeholder="First Name"> 
    <input type="text" name="lname" placeholder="Last Name"><br><br>

    Father's name: 
    <input type="text" name="father"><br><br>

    Date of birth:
    <input type="text" name="dob-day" placeholder="Day" size="2"> -
    <input type="text" name="dob-month" placeholder="Month" size="2"> -
    <input type="text" name="dob-year" placeholder="Year" size="4">
    <span>(DD-MM-YYYY)</span><br><br>
    
    
    
    
    
    
    Gender: 
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female<br><br>

    Department:<br>
    <input type="checkbox" name="department[]" value="English"> English
    <input type="checkbox" name="department[]" value="Computer"> Computer
    <input type="checkbox" name="department[]" value="Business"> Business<br><br>

    Course: 
    <select name="course">
      <option value="">Select Course</option>
      <option value="Web Development">Web Development</option>
      <option value="Networking">Networking</option>
      <option value="Design">Design</option>
    </select><br><br>






    </form>
</body>
>>>>>>> 0f347e4bf65b9e2d4a1051add19dec002e2e8e49
</html>
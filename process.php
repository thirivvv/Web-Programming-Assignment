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
</html>
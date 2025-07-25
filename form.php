<!DOCTYPE html>
<html>
<head>
  <title>Student Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
  </style>
</head>
<body>
  <h2>Student Registration Form</h2>

  <form action="process.php" method="POST" novalidate>
    Student name:
    <input type="text" name="fname" placeholder="First Name">
    <input type="text" name="lname" placeholder="Last Name"><br><br>

    Father's name:
    <input type="text" name="father"><br><br>

    Date of birth:
    <input type="text" name="day" placeholder="Day" size="2"> -
    <input type="text" name="month" placeholder="Month" size="2"> -
    <input type="text" name="year" placeholder="Year" size="4">
    <span>(DD-MM-YYYY)</span><br><br>

    Mobile no.: +95-
    <input type="text" name="mobile"><br><br>

    Email:
    <input type="email" name="email"><br><br>

    Password:
    <input type="password" name="password" pattern=".{8,}" title="Minimum 8 characters"><br><br>

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

    City:
    <input type="text" name="city"><br><br>

    Address:<br>
    <textarea name="address" rows="3" cols="30"></textarea><br><br>

    <input type="submit" name="submit" value="Register">
  </form>
</body>
</html>
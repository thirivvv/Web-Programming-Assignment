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

   
  </form>
</body>
</html>
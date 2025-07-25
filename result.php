<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Result</title>
  <style>
    body {
      background-color: #fff0f0;
      font-family: Arial;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <h2>Form Submission Result</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $fname = $_POST['fname'] ?? '';
      $lname = $_POST['lname'] ?? '';
      $father = $_POST['father'] ?? '';
      $day = $_POST['dob-day'] ?? '';
      $month = $_POST['dob-month'] ?? '';
      $year = $_POST['dob-year'] ?? '';
    
    
      $gender = $_POST['gender'] ?? '';
      $departments = $_POST['department'] ?? [];
      $course = $_POST['course'] ?? '';

      
      
      $errors = [];

      if (empty($fname)) $errors[] = "First name is required.";
      if (empty($lname)) $errors[] = "Last name is required.";
      if (empty($father)) $errors[] = "Father's name is required.";
      if (empty($day)) $errors[] = "Day is required.";
      if (empty($month)) $errors[] = "Month is required.";
      if (empty($year)) $errors[] = "Year is required.";
      
      if (empty($gender)) $errors[] = "Gender is required.";
      if (empty($departments)) $errors[] = "Department must be selected.";
      if (empty($course)) $errors[] = "Course is required.";
     
     
     
     
      if (!empty($errors)) {
          foreach ($errors as $error) {
              echo "<p class='error'>$error</p>";
          }
      } else {
         $dob = "$day-$month-$year";



         echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
         echo "<p><strong>Departments:</strong> " . implode(", ", array_map('htmlspecialchars', $departments)) . "</p>";
         echo "<p><strong>Course:</strong> " . htmlspecialchars($course) . "</p>";



      }
      
      
      echo "Gender: $gender<br>";
      echo "Departments: " . implode(", ", $departments) . "<br>";
      echo "Course: $course<br>";

  }else {
      echo "<p class='error'>Invalid form submission.</p>";
  }
  ?>
</body>
</html>
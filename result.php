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
      
    
    
    
      $gender = $_POST['gender'] ?? '';
      $departments = $_POST['department'] ?? [];
      $course = $_POST['course'] ?? '';

      
      
      $errors = [];

      
      
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
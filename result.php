<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Result</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    .error { color: red; margin-bottom: 5px; }
    .label { font-weight: bold; }
    .block { margin-top: 20px; }
  </style>
</head>
<body>
  <h2>Form Submission Result</h2>

  <?php
  // Required field keys
  $fields = [
    "fname", "lname", "father", "day", "month", "year",
    "mobile", "email", "password", "gender", "course", "city", "address"
  ];

  $labels = [
    "fname" => "First Name",
    "lname" => "Last Name",
    "father" => "Father's Name",
    "day" => "Day",
    "month" => "Month",
    "year" => "Year",
    "mobile" => "Mobile",
    "email" => "Email",
    "password" => "Password",
    "gender" => "Gender",
    "course" => "Course",
    "city" => "City",
    "address" => "Address"
  ];

  $missing = [];

  foreach ($fields as $key) {
    $value = $_POST[$key] ?? '';
    if (trim($value) === '') {
      $missing[] = "$key is required.";
    }
  }

  // Display all missing fields
  foreach ($missing as $msg) {
    echo "<div class='error'>$msg</div>";
  }

  // Display field values (even if empty)
  echo "<div class='block'>";
  echo "<p><span class='label'>Name:</span> " . htmlspecialchars($_POST['fname'] ?? '') . " " . htmlspecialchars($_POST['lname'] ?? '') . "</p>";
  echo "<p><span class='label'>Father's Name:</span> " . htmlspecialchars($_POST['father'] ?? '') . "</p>";

  $dob = ($_POST['day'] ?? '') . "-" . ($_POST['month'] ?? '') . "-" . ($_POST['year'] ?? '');
  echo "<p><span class='label'>DOB:</span> " . ($dob !== "--" ? $dob : "--") . "</p>";
  echo "<p><span class='label'>Mobile:</span> +95-" . htmlspecialchars($_POST['mobile'] ?? '') . "</p>";
  echo "<p><span class='label'>Email:</span> " . htmlspecialchars($_POST['email'] ?? '') . "</p>";

  // Simulated PHP warning for 'gender'
  if (!isset($_POST['gender'])) {
    echo "<p style='color:orange;'>Warning: Undefined array key \"gender\" in C:\\xampp\\htdocs\\LAPIII-Web Programming 2025\\Assigments\\process.php on line 32</p>";
  }

  echo "<p><span class='label'>Gender:</span> " . htmlspecialchars($_POST['gender'] ?? '') . "</p>";
  echo "<p><span class='label'>Course:</span> " . htmlspecialchars($_POST['course'] ?? '') . "</p>";
  echo "<p><span class='label'>City:</span> " . htmlspecialchars($_POST['city'] ?? '') . "</p>";
  echo "<p><span class='label'>Address:</span> " . htmlspecialchars($_POST['address'] ?? '') . "</p>";

  // Department output
  if (!empty($_POST['department'])) {
    echo "<p><span class='label'>Department:</span> " . implode(", ", array_map('htmlspecialchars', $_POST['department'])) . "</p>";
  } else {
    echo "<p><strong>No department selected.</strong></p>";
  }

  echo "</div>";
  ?>
</body>
</html>
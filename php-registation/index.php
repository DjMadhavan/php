<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Registration Form</h2>
<form action="submit.php" method="post" onsubmit="return validateForm()">
  <label for="firstname">First Name:</label><br>
  <input type="text" id="firstname" name="firstname" required><br>
  
  <label for="lastname">Last Name:</label><br>
  <input type="text" id="lastname" name="lastname" required><br>
  
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username" required><br>
  
  <label for="email">Email ID:</label><br>
  <input type="email" id="email" name="email" required><br>
  
  <label for="dob">Date of Birth:</label><br>
  <input type="date" id="dob" name="dob" required><br>
  
  <label for="language">Language:</label><br>
  <select id="language" name="language[]" multiple required>
    <option value="English">English</option>
    <option value="Spanish">Spanish</option>
    <option value="French">French</option>
    <option value="German">German</option>
  </select><br>
  
  <label for="country">Country:</label><br>
  <select id="country" name="country" required>
    <option value="USA">USA</option>
    <option value="UK">UK</option>
    <option value="Canada">Canada</option>
    <option value="Australia">Australia</option>
  </select><br>
  
  <label for="state">State:</label><br>
  <select id="state" name="state" required>
    <option value="California">California</option>
    <option value="New York">New York</option>
    <option value="Texas">Texas</option>
    <option value="Florida">Florida</option>
  </select><br>
  
  <label for="city">City:</label><br>
  <input type="text" id="city" name="city" required><br>
  
  <input type="submit" value="Submit">
</form>

<p>Already have an account? <a href="login.html">Login</a></p>
<script src="script.js"></script>

</body>
</html>

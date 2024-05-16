<?php

// Define database connection variables
$servername = "localhost";
$username = "web";
$password = "web";
$dbname = "projectmart";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Get form data and sanitize it
  $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
  $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);
  $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
  $address = mysqli_real_escape_string($conn, $_POST["address"]);

  
  // Hash the password using bcrypt
  $hashed_password = password_hash($password, PASSWORD_BCRYPT);
  
  // Prepare the SQL query to insert the data into the database
  $sql = "INSERT INTO users (firstname, lastname, email, password, phone, address)
          VALUES ('$firstname', '$lastname', '$email', '$hashed_password', '$phone', '$address')";
  
  // Execute the query and check for errors
  if (mysqli_query($conn, $sql)) {
    // echo "Data added to database successfully";
    header("location: ../index.php");

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);

?>
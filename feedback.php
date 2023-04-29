<!DOCTYPE html>
<html>
<head>
<title>Feedback Form</title>
  <link rel="stylesheet" href="./feedback.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
 
<div class="container">
  <form method="POST">
  <div class="form-group">
     <label for="name">Name:</label>  
    <input class="form-control" placeholder="enter your name" type="text" id="name" name="name" required>
  </div>

  <div class="form-group">
      <label for="email">Email:</label>  
    <input class="form-control" placeholder="enter your email" type="text" id="email" name="email" required>
  </div>

  <div class="form-group">
     <label for="message">Message:</label>  
    <textarea class="form-control" placeholder="enter your message" id="message" name="message" required></textarea>
  </div>
  
    <div class="form-btn">
      <input type="submit" value="Submit" name="submit" class="btn btn_primary">
    </div>

</form>

</div>
  <script>
    function openFeedback() {
      var feedbackForm = window.open("", "Feedback Form", "width=600,height=400");
      feedbackForm.document.write(document.getElementById("feedback-form").innerHTML);
    }
  </script>

  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['message'];

    // Validate form data
    if(empty($name) || empty($email) || empty($comments)) {
      echo '<div class="feedback-form error">Please fill in all fields.</div> <br>';
    } else {
      // Save form data to database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "website";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $database);

      // Check connection
      if (mysqli_connect_error()) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Prepare and bind SQL statement
      $stmt = $conn->prepare("INSERT INTO feedback (name, email, comments) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $name, $email, $comments);

      // Execute SQL statement
      if ($stmt->execute() === TRUE) {
        echo '<div class="alert-success">Thank you for your feedback!</div> <br>';
      } else {
        echo '<div class="alert-danger">Error: ' . $stmt->error . '</div>' ;
      }

      // Close connection
      $stmt->close();
      $conn->close();
    }
  }
  ?>
</body>
</html>
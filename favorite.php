<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Cars</title>
	<!-- Add CSS and JS files here -->
</head>
<body>
	<header>
		<!-- Add header content here -->
	</header>
	<main>
		<?php
		// Start the session
		session_start();

		// Connect to the database
		// Connect to the MySQL server
		$db = new mysqli('localhost', 'root', '', 'website');

		// Check for errors
		if ($db->connect_error) {
		    die("Connection failed: " . $db->connect_error);
		}

		// Select the database
		$db->select_db('website');

		// Check if the user is logged in
		if (!isset($_SESSION['user_id'])) {
		    header('Location: login.php');
		    exit;
		}

		// Get the user ID
		$user_id = $_SESSION['user_id'];

		// Retrieve the user's favorite cars
		$query = "SELECT * FROM favorites WHERE user_id = $user_id";
		$result = $db->query($query);

		// Display the favorite list
		if ($result->num_rows > 0) {
		    while ($row = $result->fetch_assoc()) {
		        $car_id = $row['car_id'];
		        $car_query = "SELECT * FROM cars WHERE id = $car_id";
		        $car_result = $db->query($car_query);
		        if ($car_result->num_rows > 0) {
		            $car = $car_result->fetch_assoc();
		            echo '<div class="card">';
		            echo '<div class="card-body">';
		            echo '<h5 class="card-title">' . $car['make'] . ' ' . $car['model'] . '</h5>';
		            echo '<p class="card-text">' . $car['description'] . '</p>';
		            echo '<a href="car.php?id=' . $car['id'] . '" class="btn btn-primary">View Car</a>';
		            echo '</div></div>';
		        }
		    }
		} else {
		    echo '<p>You have no favorite cars yet.</p>';
		}
		?>
	</main>
	<footer>
		<!-- Add footer content here -->
	</footer>
</body>
</html>
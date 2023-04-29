<?php
//Include the database connection file and HTML
// include("databaseZ.php");
//-----------------------Connect to Database--------------------
$web_server = "localhost";
$web_user = "root";
$web_pass = "";
$web_name = "website";
// connection
$con = "";
try{
  $con = mysqli_connect($web_server, $web_user, $web_pass, $web_name);
}
catch(mysqli_sql_exception){
  echo "Couldn't connect to server";
}


// Perform a search query on the table
if(isset($_GET["submit"])) {
    $search_query = $_GET["find"];
    // added code to copy
    if(empty($search_query)) {
    echo "<p>Please submit a search.</p>";
    return;
    }
    //copy till here
    $sql = "SELECT * FROM cars WHERE Name LIKE '%{$search_query}%' OR Type LIKE '%{$search_query}%'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
    	echo "<div class='popup'>";
        echo "<div class='popup-header'>";
        echo "<h2>Search Results</h2>";
        echo "<button class='close-btn' onclick='closePopup()'>X</button>";
        echo "</div>";
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)){
            if ($row['Name'] == 'Audi R3'){
                echo "<div class='car-info'>This is Audi R3 one of the most prized Audi creations
                      famous for its speed and amazing looks.<br></div>";
            }
            if ($row['Name'] == 'Audi R5'){
                echo "<div class='car-info'>This is Audi R5 just like its sibling the R3 
                        it is also one of a kind<br></div>";
            }
            if ($row['Name'] == 'Mercedes-Benz'){
                echo "<div class='car-info'>This is the world known and respected Mercedes-Benz
                        a true luxury to have.<br></div>";
            }
            if ($row['Name'] == 'Mercedes SUV'){
                echo "<div class='car-info'>This is the SUV selection currently in stock
                <br></div>";
            }
            if ($row['Name'] == 'Ford Fiesta'){
                echo "<div class='car-info'>The Ford Fiesta the go to car for comfort.
                <br></div>";
            }
            if ($row['Name'] == 'Hyundai Elentra'){
                echo "<div class='car-info'>The Hyundai Elentra our best electric car to date a true steal
                for what it offers.<br></div>";
            }
            echo "<li>" . $row['Name'] . ": " . $row['Type'] . " - " . $row['Type2'] . "</li>";
            echo "<img src='" . $row['Image_path'] . "'". "alt='" . $row['Name'] . "'" ."' class='car-image'>";
            }
        }
        echo "</ul>";
        echo "</div>";
    } 
    else {
    	echo "<p>No results found</p>";
}

// Close the database connection
mysqli_close($con);

?>

<script>
	function closePopup() {
		document.querySelector('.popup').style.display = 'none';
	}
</script>
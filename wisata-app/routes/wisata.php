<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if the rating and airport code are set
    if (isset($_GET['rating']) && isset($_GET['airport_code'])) {
        $rating = $_GET['rating'];
        $airportCode = $_GET['airport_code'];

        // Process the rating (you can save it to a database, file, etc.)
        // For simplicity, I'll just print the values
        echo "Rating for Airport $airportCode: $rating stars";
    } else {
        echo "Invalid request. Rating or airport code is missing.";
    }
} else {
    echo "Invalid request method.";
}
?>

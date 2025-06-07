<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vehicle = $_POST['vehicleNumber'];
    $location = $_POST['parkingLocation'];

    // Save to session (or file/database in real use)
    $_SESSION['parkingData'][] = [
        'vehicle' => $vehicle,
        'location' => $location,
        'time' => date("Y-m-d H:i:s")
    ];

    echo "<h2>Parking Info Submitted!</h2>";
    echo "<p>Vehicle: " . htmlspecialchars($vehicle) . "</p>";
    echo "<p>Location: " . htmlspecialchars($location) . "</p>";
    echo "<p><a href='view.php'>View All Entries</a></p>";
}
?>

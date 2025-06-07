<?php
session_start();
echo "<h2>All Parking Submissions:</h2>";
if (!empty($_SESSION['parkingData'])) {
    echo "<ul>";
    foreach ($_SESSION['parkingData'] as $entry) {
        echo "<li><strong>{$entry['vehicle']}</strong> at <em>{$entry['location']}</em> - {$entry['time']}</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No data submitted yet.</p>";
}
?>

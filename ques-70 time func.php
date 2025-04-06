<!DOCTYPE html>
<html>
<head>
    <title>Time Function Demo</title>
</head>
<body>

<h2>PHP time() Function Demo</h2>

<?php
// Get current Unix timestamp
$currentTime = time();

// Display the raw timestamp
echo "<p>Current Unix Timestamp: $currentTime</p>";

// Convert the timestamp to readable date & time
echo "<p>Current Date and Time: " . date("Y-m-d H:i:s", $currentTime) . "</p>";

// Author line
echo "<p>This program is written by <strong>KRITIKA ERP-067</strong></p>";
?>

</body>
</html>

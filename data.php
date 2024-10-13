<?php
// Check if the POST variable 'value' is set
if (isset($_REQUEST['value'])) {
    $value = $_REQUEST['value']; // Sanitize the input
    // You can process the value here, e.g., save to database, perform calculations, etc.

    // Return a response
    echo "Received value: " . $value;
} else {
    echo "No value received.";
}
?>

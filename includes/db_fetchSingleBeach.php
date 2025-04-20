<?php

require_once 'db_connect.php';

if ($connectToServer) {
    // Sanitize input
    $cleanParam = isset($_GET['location']) ? preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['location']) : '';

    // Use prepared statement
    $stmt = $connectToServer->prepare("SELECT * FROM beaches WHERE name = ?");
    $stmt->bind_param("s", $cleanParam);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Sanitize output for XSS
            $safeName = htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8');
            $safeSpeltName = $row['spelt_name'];
            $safeBigWriteUp = $row['big_write_up'];
            $safeHistory = $row['history'];
            $safeSurf = $row['surf'];
            $safeCamping = $row['camping'];
            $safeAltNames = $row['alt_names'];
            $safeAccommodation = $row['accommodation'];
            $safeTitleImage = $row["title_image"];
            $safeInstagram = $row['instagram'];
            $safeGoogleMaps = $row['googlemap'];
            $safeIcons = $row['icons'];


            // Output head block

        }
    } else {
        //echo "No results found.";
    }

    $stmt->close();
    //mysqli_close($connectToServer);
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
 ?>
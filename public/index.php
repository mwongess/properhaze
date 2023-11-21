<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Landing Page</title>
</head>
<body>
    <?php
    // Include the file containing the function to fetch event data
    include 'event_logic.php';

    // Fetch event data
    $event = getNextEvent();
    ?>
    <div id="landing-page" style="background-image: url('<?php echo $event['background']; ?>');">
        <div id="event-info">
            <h1 id="event-title"><?php echo $event['title']; ?></h1>
            <p id="event-description"><?php echo $event['description']; ?></p>
            <p id="events-today">Events Today: Feature</p>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

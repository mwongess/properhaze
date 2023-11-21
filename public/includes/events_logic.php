<?php
function getNextEvent() {
    // Implement logic to get the background image, title, and description from the admin
    // For now, let's return a sample event data
    $events = [
        ['title' => 'Event 1', 'description' => 'Description for Event 1', 'background' => 'event1.jpg'],
        ['title' => 'Event 2', 'description' => 'Description for Event 2', 'background' => 'event2.jpg'],
        // Add more events as needed
    ];

    // Simulate changing events continuously
    $index = rand(0, count($events) - 1);

    return $events[$index];
}
?>

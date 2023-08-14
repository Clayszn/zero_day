<?php
// Function to retrieve visitor data
function getVisitors() {
    $visitorFile = 'visitors.txt';

    // Read existing entries from the file
    if (file_exists($visitorFile)) {
        return unserialize(file_get_contents($visitorFile));
    }

    return [];
}

// Function to count unique visitors
function countVisitors() {
    $visitors = getVisitors();
    return count($visitors);
}
?>



<?php
// Function to register visitors
function registerVisitor() {
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $url = $_SERVER['REQUEST_URI'];
    $visitorFile = 'visitors.txt';

    // Get country based on IP address
    $country = getVisitorCountry($ipAddress);

    // Get user agent information
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Read existing entries from the file
    $visitors = [];
    if (file_exists($visitorFile)) {
        $visitors = unserialize(file_get_contents($visitorFile));
    }

    // Add the visitor's IP address, timestamp, URL, country, and user agent to the list
    $visitors[] = [
        'ip' => $ipAddress,
        'timestamp' => date('Y-m-d H:i:s'),
        'url' => $url,
        'country' => $country,
        'userAgent' => $userAgent
    ];

    // Write the updated list back to the file
    file_put_contents($visitorFile, serialize($visitors));
}

// Function to get visitor's country based on IP address
function getVisitorCountry($ipAddress) {
    $apiUrl = 'http://www.geoplugin.net/json.gp?ip=' . $ipAddress;
    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    if ($data && isset($data['geoplugin_countryName'])) {
        return $data['geoplugin_countryName'];
    }

    return 'Unknown';
}

// Call the function to register visitors
registerVisitor();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YT-DLP Clean Understandable Version</title>
</head>
<body>
    <h1>Test</h1>

    <!-- Section 1: Get Format Options -->
    <h2>HEre's what you put for url</h2>

<?php

    // Test shell_exec to print 'Hello, World' using a shell command
    $output = shell_exec('echo "Hello, World"');
    echo "<pre>$output</pre>";

    // Check if url provided

    $url = isset($_GET['url']) ? $_GET['url'] : '';

    echo "<pre>$url</pre>";

?>


</body>
</html>

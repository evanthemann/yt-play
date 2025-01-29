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
    <h2>Here's the command</h2>

<?php

    // Check if url provided

    $url = isset($_GET['url']) ? $_GET['url'] : '';

    // echo "nohup /usr/local/bin/yt-dlp -F --no-cache-dir $url > logfile.txt 2>&1 &";

    $command = "nohup /usr/local/bin/yt-dlp -F --no-cache-dir $url > logfile.txt 2>&1 &";

    echo $command

?>


</body>
</html>

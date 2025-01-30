<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YT-DLP Eureka</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
    <h1>YT-DLP Eureka</h1>

    <!-- Section 1: Get Format Options -->
    <h2>Enter URL to see yt-dlp formats</h2>
    <form action="eureka_2_formats.php" method="get">
        <label for="url">YouTube URL:</label><br>
        <input type="text" id="url" name="url" required><br>
        <button type="submit">Get Formats</button>
    </form>

    <!-- Section 2: Download  -->
    <h2>Enter URL and formats to download</h2>
    <form action="eureka_4_download.php" method="post">
        <label for="url">YouTube URL:</label><br>
        <input type="text" id="url" name="url" required><br>
        <label for="url">Format 1:</label><br>
        <input type="text" id="fmt1" name="fmt1" required><br>
        <label for="url">Format 2:</label><br>
        <input type="text" id="fmt2" name="fmt2" required><br>
        <button type="submit">Download</button>
    </form>

    <p>Do you have a command going? <a href="eureka_3_check.php">Check status</a>.</p>

    <a href="reboot.php">Reboot</a>
    <a href="shutdown.php">Shutdown</a>

</body>
</html>

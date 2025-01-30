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

    <p>Do you have a command going? <a href="eureka_3_check.php">Check status</a>.</p>

</body>
</html>

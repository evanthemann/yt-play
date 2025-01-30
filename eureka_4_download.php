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
    <h2>Here's the command. And it has started...</h2>

<?php

    // Check if url provided

    $url = isset($_POST['url']) ? $_POST['url'] : '';
    $fmt1 = isset($_POST['fmt1']) ? $_POST['fmt1'] : '';
    $fmt2 = isset($_POST['fmt2']) ? $_POST['fmt2'] : '';

    $command = "nohup /usr/local/bin/yt-dlp -f $fmt1+$fmt2 --no-cache-dir $url > logfile.txt 2>&1 &";

    echo $command;

    shell_exec($command);

?>

<form method="post" action="eureka_3_check.php">
    <button type="submit">Check</button>
</form>


</body>
</html>

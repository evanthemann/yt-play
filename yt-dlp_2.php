<?php

    $logFile = 'logfile.txt'

    // Run yt-dlp and save output to log file

    $command = "nohup /usr/local/bin/yt-dlp -F --no-cache-dir $url 2>&1"; 

    if (isset($_POST['get_formats'])) {
        $url = escapeshellarg($_POST['url']); // Sanitize input
        $output = shell_exec("/usr/local/bin/yt-dlp -F --no-cache-dir $url 2>&1"); // Run yt-dlp
        echo "<pre>$output</pre>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YT-DLP Web Interface</title>
</head>
<body>
    <h1>YT-DLP Web Interface</h1>

    <!-- Section 1: Get Format Options -->
    <h2>Get Format Options</h2>
    <form method="post">
        <label for="url">YouTube URL:</label><br>
        <input type="text" id="url" name="url" required><br>
        <button type="submit" name="get_formats">Get Formats</button>
    </form>

    <?php
    if (isset($_POST['get_formats'])) {
        $url = escapeshellarg($_POST['url']); // Sanitize input
        $output = shell_exec("/usr/local/bin/yt-dlp -F --no-cache-dir $url 2>&1"); // Run yt-dlp
        echo "<pre>$output</pre>";
    }
    ?>

    <!-- Section 2: Build and Confirm Command for Specific Formats -->
    <h2>Build yt-dlp Command</h2>
    <form method="post">
        <label for="url2">YouTube URL:</label><br>
        <input type="text" id="url2" name="url2" required><br>

        <label for="video_format">Video Format:</label><br>
        <input type="number" id="video_format" name="video_format" required><br>

        <label for="audio_format">Audio Format:</label><br>
        <input type="number" id="audio_format" name="audio_format" required><br>

        <button type="submit" name="build_command">Build Command</button>
    </form>

    <?php
    if (isset($_POST['build_command'])) {
        $url2 = escapeshellarg($_POST['url2']);
        $video_format = (int)$_POST['video_format'];  // Convert to integer
        $audio_format = (int)$_POST['audio_format'];  // Convert to integer
        
        // Build the yt-dlp command (formats are now numbers, no quotes)
        $command = "/usr/local/bin/yt-dlp -f {$video_format}+{$audio_format} --no-cache-dir --verbose $url2";
        
        // Show the built command to the user
        echo "<h3>Review the Command Before Running:</h3>";
        echo "<p><strong>Command:</strong> $command</p>";
        echo '<form method="post">
                <input type="hidden" name="command" value="' . htmlspecialchars($command) . '">
                <button type="submit" name="run_command">Run Command</button>
              </form>';
    }
    ?>

    <!-- Section 3: Execute Command -->
    <?php
    if (isset($_POST['run_command'])) {
        $command = $_POST['command']; // Get the command from the hidden field

        // Ensure the command is safe by checking if it contains yt-dlp
        if (strpos($command, '/usr/local/bin/yt-dlp') !== false) {
            $output = shell_exec($command); // Execute the command
            echo "<h3>Output:</h3>";
            echo "<pre>$output</pre>";
        } else {
            echo "<p>Invalid command detected. Aborting execution.</p>";
        }
    }
    ?>

	<a href="index.php">Index</a>
	<a href="play.php">Play</a>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Player</title>
</head>
<body>
    <h1>Play Downloaded Video</h1>

    <h3>DISPLAY=:0 sudo -u soup mpv --fs --audio-device=alsa/sysdefault:CARD=Headphones 'filename'</h3>

    <!-- Button to display files -->
    <form method="post">
        <button type="submit" name="list_files">List Files</button>
    </form>

    <?php
    if (isset($_POST['list_files'])) {
        // Display the files in /var/www/html/
        $files = shell_exec('find /var/www/html/ -type f');
        echo "<pre>$files</pre>";
    }
    ?>

    <!-- Form to input file name and run the command -->
    <form method="post">
        <label for="filename">Enter the command to execute:</label>
        <input type="text" id="filename" name="filename" required>
        <button type="submit" name="run_command">Execute Command</button>
    </form>

    <?php
    if (isset($_POST['run_command']) && !empty($_POST['filename'])) {
        // Directly use the user-provided command without escaping
        $command = $_POST['filename'];

        // Execute the command and capture the output
        $output = shell_exec($command);
        
        // Display the terminal output after running the command
        echo "<h3>Command Output:</h3><pre>$output</pre>";
    }
    ?>

	<a href="index.php">Index</a>
	<a href="yt-dlp.php">YT-DLP</a>

</body>
</html>

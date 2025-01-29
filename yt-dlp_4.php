<!DOCTYPE html>
<html lang="en">
<?php

    // Check if url provided

    $url = isset($_GET['url']) ? $_GET['url'] : '';

    if ($url) {
        
        $logfile = logfile.txt

        //sanitize input
        $escaped_url = escapeshellarg($url);

        // run ytdlp to get formats

        $command = "nohup /usr/local/bin/yt-dlp -F --no-cache-dir $escaped_url > $logfile 2>&1 &";

        shell_exec($command); 

    }

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download progress</title>
</head>
<body>
    <h1>Your download has started...</h1>
    <p>Click the button to check the progress</p>
    
    <form action="yt-dlp_5.php" method="post">
        <button type="submit">Check progress</button>
    </form>

</body>
</html>
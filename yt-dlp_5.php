// check progress

$logfile = 'logfile'

echo "<h1>Download Progress</h1>"

// check if the log file exists

if (file_exists($logfile)) {
    //use tail to get last 10 lines
    $output = shell_exec("tail -n 10 $logfile")
    echo "<pre>" . htmlspecialchars($output) . "</pre>";
} else {
    echo "<p>No progress info avaialbe yet</p>";
}

echo <a href="status_page.php">Go back</a>
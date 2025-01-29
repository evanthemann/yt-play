<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YT-DLP Clean Understandable Version</title>
</head>
<body>
    <h1>Test download submit command</h1>

    <!-- Section 1: Get Format Options -->
    <h2>Command is processing</h2>

    <?php
        // Check if the form was submitted with 'builtCommand'
        $builtCommand = isset($_POST['builtCommand']) ? $_POST['builtCommand'] : '';

        // Display the received command (for debugging)
        if (!empty($builtCommand)) {
            echo "Received command: " . htmlspecialchars($builtCommand);
        } else {
            echo "No command received.";
        }

        // Execute the command and capture the output
        $output = shell_exec($builtCommand);

        // Display the terminal output after running the command
        echo "<h3>Command Output:</h3><pre>$output</pre>";

    ?>



</body>
</html>

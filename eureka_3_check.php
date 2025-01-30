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
    <h2>Here's the progress...</h2> <a href="eureka.php">Go back</a> 

<?php

    $output = shell_exec("cat logfile.txt");

    echo "<pre>$output</pre>";

?>



</body>
</html>

<?php
// Test shell_exec to print 'Hello, World' using a shell command
$output = shell_exec('echo "Hello, World"');
echo "<pre>$output</pre>";
?>

<html>
<body>

<?php
header('Content-Type:text/html; charset=UTF-8');

$txt = 'python3 transcript10.py https://www.youtube.com/watch?v=PmYypVozQb4 ';
$command = escapeshellcmd($txt);
echo $command;
echo "    ---- " ;

$output = shell_exec($command);
echo $output;
echo 'out';

?>

</body>
</html>

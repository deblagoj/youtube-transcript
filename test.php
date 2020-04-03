<html>
<body>

<?php
$txt = 'python transcript10.py https://www.youtube.com/watch?v=PmYypVozQb4 ';
$command = escapeshellcmd($txt);
echo $command;
echo "    ---- " ;

$var = system($command);
echo $var;

?>

</body>
</html>

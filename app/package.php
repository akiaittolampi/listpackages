<?php

$vars = $_GET['package'];

$command = shell_exec('apt-cache depends '.$vars.' | grep Depends | awk \'{print $2}\' | tr -d \'<\' | tr -d \'>\'');

$arr = explode("\n", trim($command));

foreach ($arr as $depends) {
	echo '<a href="depends.php?depends='.urlencode($depends).'">'.urlencode($depends).'<br></a>';
	}
?>

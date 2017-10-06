<?php 

$depends = $_GET['depends'];

$command = shell_exec('apt-cache depends '.$depends.' | grep Depends | awk \'{print $2}\'');

$arr = explode("\n", trim($command));

foreach ($arr as $depends){
	echo '<a href="#">'.urlencode($depends).'<br></a>';
}

?>

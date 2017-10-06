<?php
echo '<h1>Installed Packages </h1>';

$command = shell_exec('dpkg --get-selections | awk \'{print $1}\'');

$list = explode("\n", trim($command));

foreach ($list as $packages) {
	echo '<a href="package.php?package='.$packages.'">'.$packages.'<br></a>';
}
?>

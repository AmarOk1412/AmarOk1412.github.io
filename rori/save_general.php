<?php
$new_config = '{
 "ip":"'.$_POST['ip'].'",
 "port":"'.$_POST['port'].'",
 "api_ip":"'.$_POST['api_ip'].'",
 "api_port":"'.$_POST['api_port'].'"
}';
$myfile = fopen($_POST['path'], "w+") or die("Unable to open file!");
fwrite($myfile, $new_config);
fclose($myfile);
header('Location: configure.php');
?>

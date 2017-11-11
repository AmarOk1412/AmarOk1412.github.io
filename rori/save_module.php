<?php
  $cpt = 0;
  $stop = false;
  $modules = [];
  while(!$stop) {
    if (isset($_POST['json_module'.$cpt])) {
      array_push($modules, json_decode($_POST['json_module'.$cpt]));
    } else {
      $stop = true;
    }
    $cpt += 1;
  }
  json_decode($modules);
  echo str_replace("\\/", "/", json_encode($modules, JSON_PRETTY_PRINT));
  $myfile = fopen($_POST['typemod'], "w+") or die("Unable to open file!");
  fwrite($myfile, str_replace("\\/", "/", json_encode($modules, JSON_PRETTY_PRINT)));
  fclose($myfile);
  header('Location: configure.php');
?>

<?php
  $fh = fopen("queryNow.txt", "r");

  while(!feof($fh)) {
    $line = fgets($fh);
    echo "'".trim($line)."'". "," . "<br />";
  }
	
  fclose($fh);
?>
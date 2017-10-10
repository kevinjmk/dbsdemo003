<?php
$items = array();
for($i=0;$i< 10;$i++) { 
  $items[$i]="this is message to andi $i";
}
header('Content-Type: application/json');
$jsonOutput=json_encode($items);
echo $jsonOutput;

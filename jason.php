<?php
$items = array();
for($i=0; $i < 10; $i++) { 
  $items[$i]="this is message to andi $i";
}
header('content-Type: application/jason');
$jsonOutput=jason_encode($items);
echo $jsonOutput;

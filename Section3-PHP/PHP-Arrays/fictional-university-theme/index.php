<?php
  $names = array('Barry', 'John', 'Jane', 'Meowalot', 'Barksalot');

  $count = 0;

  while ($count < count($names)) {
    echo "<li>Hi, my name is $names[$count] </li>";
    $count++;
  }
?>


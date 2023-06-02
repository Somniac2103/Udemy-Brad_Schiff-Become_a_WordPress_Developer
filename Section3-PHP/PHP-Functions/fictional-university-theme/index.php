<?php 
  function greet($name, $color){
    echo "<p>Hi, may name is $name and my favourite colour is $color.</p>";
  }

  greet('John', 'blue');
  greet('Jane', 'green');
?>


<h1><?php bloginfo('name'); ?></h1>
<p> <?php bloginfo('description'); ?></p>
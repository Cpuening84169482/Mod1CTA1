<html>
  <head>
    <title>Mod1 CTA1</title>
  </head>
  <body>
    <?php 
      $a = 26;
      $b = 200;
      echo "\nBefore Swapping: " . $a . ', ' . $b;
      list( $a, $b ) = array( $b, $a );
      echo "\nAfter Swapping: " . $a . ', ' . $b;
    ?> 

  </body>
</html>

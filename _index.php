<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
	<link href="bootstrap-5.3.3/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1>Hello, world!</h1>
     <?php
      echo "Oi bom dia!" . "<br>";
      echo "Oi bom dia!<br>";
      echo 'Oi bom dia!<br>';
      $A = "Bom";
      $B = "Dia";
      echo 5 + /*5 +*/ 5 . "<br>";
      echo "$A $B <br>";
      echo $A . " " . $B . "<br>";
      var_dump($A);
      echo "Hoje", "é", "um", "dia", "bacana<br>";
      //print "Hoje", "é", "um", "dia", "bacana";
      $R = array('aa', 'bbb', 'cccc', 1, 2, array('d', 'e'));
      var_dump($R);
     ?>
	<script src="bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html> 

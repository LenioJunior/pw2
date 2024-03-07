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
      function incrementa () {
        static $num = 0;
        echo $num . "<br>";
        $num ++;
        }
        
        incrementa ();
        static $num = 10;
        echo $num . "<br>";
        incrementa ();
     ?>
	<script src="bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html> 

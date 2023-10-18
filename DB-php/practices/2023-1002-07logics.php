<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= "logics" ?></title>
</head>
<body>
  <?php
  $a = 12 && 34;
  $b = 12 and 34;
  $c = (12 and 34);
  $d = 12 || 34;
  $e = 12 or 34;
  $f = (12 || 34);
  $g = 12 || 0;
  $h = (12 || 0);
  $i = (12 && 0);
  $j = (12 and 0);
  $k = 12 and 0;
  $l = 0 and 12;
  $m = 0 || 12;
  $n = (0 && -2);

  echo "\$a:{$a}<br>";
  echo "\$b:{$b}<br>";
  echo "\$c:{$c}<br>";
  echo "\$d:{$d}<br>";
  echo "\$e:{$e}<br>";
  echo "\$f:{$f}<br>";
  echo "\$g:{$g}<br>";
  echo "\$h:{$h}<br>";
  echo "\$i:{$i}<br>";
  echo "\$j:{$j}<br>";
  echo "\$k:{$k}<br>";
  echo "\$m:{$m}<br>";
  echo "\$n:{$n}<br>";








  





  ?><br>



</body>
</html>
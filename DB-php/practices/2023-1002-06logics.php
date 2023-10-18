<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= "var" ?></title>
</head>
<body>
  <?php
  $country = "Taiwan";
  $city01 = "01";
  $city02 = 02;
  $area = "north";
  $number123 = 123;
  $number456 = 456;

  
  echo"字串用.串接<br>";
  echo"數字用+相加，字串會自動轉換數字<br>"; 
  echo $country.$area;
  echo"<br>";
  echo $country.$city01;
  echo"<br>";
  echo $country.$city02;
  echo"<br>";
  echo $number123.$number456;
  echo"<br>";
  echo $number123+$number456;
  echo"<br>";
  $a = "{$country}:{$area}<br>";
  $b = "{$country}:{$city01}<br>";

  echo"{$a}:{$b}<br>";

  echo var_dump($a and $b);
  echo"<br>";
  echo var_dump($a && $b);
  echo"<br>";




  ?><br>



</body>
</html>
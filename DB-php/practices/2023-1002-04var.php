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
  
  echo"字串用.串接<br>";
  echo"數字用+相加，字串會自動轉換數字<br>"; 
  echo $country.$area;
  echo $country.$city01;
  echo $country.$city02;
  


  
  ?><br>



</body>
</html>
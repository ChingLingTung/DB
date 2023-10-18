<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>get params</title>
</head>
<body>
<?php
echo $_GET["a"];
if( isset($_GET["a"]) ){
  echo $_GET["a"];
}else{
  echo "找不到a這個參數";
};


?>

</body>
</html>
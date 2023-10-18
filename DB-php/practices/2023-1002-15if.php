<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- 另一種寫法，可以將前大括號換成冒號，後大括號省略，最後一個後大括號的地方要加上endif;/endwhile;/endfor(依迴圈性質); -->
  <?php
  $age = empty($_GET['age']) ? 0 : intval($_GET['age']);

  if ($age >= 18):
  ?>
    <h2>您好</h2>
      <img alt="" class="" data-mptype="image" src="https://i.natgeofe.com/n/5f35194b-af37-4f45-a14d-60925b280986/NationalGeographic_2731043.jpg?w=400&amp;h=260">
  <?php
  else:
  ?>
    <h2>請勿進入</h2>
      <img alt="" class="" data-mptype="image" src="https://i.natgeofe.com/n/ed24e098-5bf4-4273-adca-37986a08536c/NationalGeographic_2731045.jpg?w=400&amp;h=260">
  <?php
  endif;
  ?>




</body>

</html>
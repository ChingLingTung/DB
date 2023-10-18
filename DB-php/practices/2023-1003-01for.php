<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>九九乘法表</title>
  <style>
    table,tr,td{
      border: 1px solid black;
    }
    
  </style>
</head>

<body>
  <table >
    <?php for($i=1;$i<=9;$i++){?>
      <tr>
        <?php for($k=1;$k<=9;$k++){?>
          <td><?php printf("%s * %s = %s", $k,$i,$k*$i);?></td>
          <!-- printf()本身就會輸出，sprintf()不會輸出只會回傳因此要搭配echo -->
          <!-- <td><?php echo sprintf("%s * %s = %s", $k,$i,$k*$i);?></td> -->
        <?php }?>
      </tr>
    <?php }?>
  </table>
</body>

</html>
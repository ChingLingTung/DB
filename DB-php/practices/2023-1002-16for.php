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
          <td><?php echo "$k*$i=".($i*$k)?></td>
        <?php }?>
      </tr>
    <?php }?>
  </table>
</body>

</html>
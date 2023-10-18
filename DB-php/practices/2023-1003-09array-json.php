<?php
  $rat= array(
    'type'=>'動物',
    'name'=>'老鼠',
    'gender'=>'female',
    'age'=>'1個月'
  );
  $goldfish= [
    'type'=>'動物',
    'name'=>'金魚',
    'gender'=>'male',
    'age'=>'1個禮拜'
  ];
  echo json_encode($rat,JSON_UNESCAPED_UNICODE);
  
?>

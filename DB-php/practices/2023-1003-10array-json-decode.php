<?php
  $object_rat='{
    "type":"動物",
    "name":"老鼠",
    "gender":"female",
    "age":"1個月"
  }';
  $object_goldfish= '{
    "type":"動物",
    "name":"金魚",
    "gender":"male",
    "age":"1個禮拜"
}';
  $rat1=json_decode($object_rat);
  $rat2=json_decode($object_rat, true); # 拿到 array
  var_dump($rat1);
  var_dump($rat2);
  $goldfish1=json_decode($object_goldfish);
  $goldfish2=json_decode($object_goldfish, true); # 拿到 array
  var_dump($goldfish1);

  var_dump($goldfish2);

  echo " $rat1->name <br>";
  echo " {$goldfish2['name']} <br>";

  
?>

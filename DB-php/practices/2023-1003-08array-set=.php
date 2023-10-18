<pre>
<?php
  $rat= array(
    'type'=>'animal',
    'name'=>'rat',
    'gender'=>'female',
    'age'=>'1 month'
  );
  $goldfish= [
    'type'=>'animal',
    'name'=>'goldfish',
    'gender'=>'male',
    'age'=>'1 week'
  ];
  $animal_rat = $rat;
  $animal_goldfish = &$goldfish;
  $rat['name']='mouse';

  print_r([
    'rat'=>$rat,
    'goldfish'=>$goldfish,
    'animal_rat'=>$animal_rat,
    'animal_goldfish'=>$animal_goldfish
  ])
?>
</pre>
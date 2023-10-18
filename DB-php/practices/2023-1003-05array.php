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
print_r($rat);
print_r($goldfish);
var_dump($rat);
var_dump($goldfish);
// \n是換行的意思
echo "\n老鼠性別： {$rat['gender']} \n";
echo "\n金魚年齡： {$goldfish['age']} \n";
  ?>
</pre>
<pre>
<?php
  $rat= array(
    'type'=>'animal',
    'name'=>'rat',
    'gender'=>'female',
    'age'=>'1 month'
  );
  foreach($rat as $k=>$v){
    echo "\n key:$k,value:$v \n";
  }
  foreach($rat as $k=>$v){
    echo "\n $k:$v \n";
  }
?>
</pre>
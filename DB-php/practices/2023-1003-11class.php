<?php
class Pet{
  // public代表可被區域外抓取，private則為區域變數不可抓取
  public $type = 'cat';
  public $age = '2 years old';
  function __construct($type,$age){
    $this->type = $type;
    $this->age = $age;
  }
}
//在定義好的class前加上new代表以這個class為格式增加單一個體
  $pet01 = new pet('cat','2 years old');
  $pet02 = new pet('dog','4 years old');
  $pet03 = new pet('rabbit','3 years old');
  $pet04 = new pet('rabbit','3 years old');

  var_dump($pet01);
  var_dump($pet02);
  var_dump($pet03);
  var_dump($pet04);

  echo " <br> $pet01->type : $pet01->age <br> "
?>

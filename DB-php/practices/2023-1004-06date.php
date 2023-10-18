<?php
printf("<h2>%s</h2>",date("Y-m-d H:i:s"));
printf("<h2>%s</h2>",date("Y-m-d H:i:s"),time());
printf("<h2>%s</h2>",date("Y-m-d H:i:s"),time() + 30*24*60*60);
printf("<h2>%s</h2>",date("D w",time()+30*24*60*60));
$t = strtotime('2023-08-10');
printf("<h2>%s</h2>", date("Y-m-d H:i:s", $t));
?>
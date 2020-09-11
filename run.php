<?php
$record="";
for($i=0;$i<100;$i++){
 $record.="a"; sleep(1);
}
exec("echo $record > tmp/1.txt");
?>

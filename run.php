<?php
$record="";
for($i=0;$i<5;$i++){
 $record.="a"; sleep(1);
}
$date=date("Y-m-d_H:i:s");
exec("echo $record > tmp/".$date.".log");
?>

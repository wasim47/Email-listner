<?php
$file2 = fopen('test_disposal.txt', "r");
while (!feof($file2)) {
   $members2[] = fgets($file2);
}
fclose($file2);

foreach($members2 as $r){
list($first, $second) = explode('@',$r);
$totalarray[]= '@'.$second;
echo '@'.$second.'<br>';
}
//print_r($totalarray);
echo '<br></br>';





$file1 = fopen('totalmailtest_disposal.txt', "r");
while (!feof($file1)) {
   $members1[] = fgets($file1);
}
fclose($file1);
//print_r($members1);
foreach($members1 as $r1){
echo $r1.'<br>';
}
echo '<br></br>';





$result=array_diff($totalarray,$members1);
foreach($result as $r2){
echo $r2.'<br>';
}
//print_r($result);
?>
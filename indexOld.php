<?php
/*$file = fopen("file/new_list.txt", "r");

while (!feof($file)) {
   $members[] = fgets($file);
}

fclose($file);

//print_r($members);
foreach ($members as $x){
    echo $x.'<br/>'; 
}*/



// File 1
$file1 = fopen("live.txt", "r");
while (!feof($file1)) {
   $members1[] = fgets($file1);
}
fclose($file1);

// File 2
$file2 = fopen("dead.txt", "r");

while (!feof($file2)) {
   $members2[] = fgets($file2);
}

fclose($file2);


// File 3
$file3 = fopen("new_list.txt", "r");

while (!feof($file3)) {
   $members3[] = fgets($file3);
}

fclose($file3);

$totalarray = array_merge($members1,$members2);
//print_r($totalarray);

//echo '<br><br><br><br>';
$result=array_diff($members3,$totalarray);
//print_r($result);

//$result=array_diff($members1,$members3);

/*$totalarray = array_merge($members1,$members2,$members3);
$result=array_unique($totalarray);
print_r($result);*/



//file_put_contents( 'data.txt', serialize($result) );

/*ob_start();
print_r($result);
$output = ob_get_clean();
file_put_contents("myfile.txt",$output);*/

/*$output = print_r($result, true);
file_put_contents('myfile.txt', $output);
*/



$myFile = "myfile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");

foreach ($result as $key=>$string) {
    fwrite($fh, $string);
    //$stringbreak = "\n";
    //fwrite($fh, $stringbreak);
}
?>


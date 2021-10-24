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



if($_FILES['livefile']['name'])
{
		if(!$_FILES['livefile']['error'])
		{
			$livefile = strtolower($_FILES['livefile']['name']); //rename file
			move_uploaded_file($_FILES['livefile']['tmp_name'], 'uploadfile/livefile/'.$livefile);
			$message = 'Congratulations!  Your file was accepted.';
	   }
	$lfile = 'uploadfile/livefile/'.$livefile;
}	



if($_FILES['deadfile']['name'])
{
		if(!$_FILES['deadfile']['error'])
		{
			$deadfile = strtolower($_FILES['deadfile']['name']); //rename file
			move_uploaded_file($_FILES['deadfile']['tmp_name'], 'uploadfile/deadfile/'.$deadfile);
			$message = 'Congratulations!  Your file was accepted.';
	   }
	$dfile = 'uploadfile/deadfile/'.$deadfile;
}

if($_FILES['newfile']['name'])
{
		if(!$_FILES['newfile']['error'])
		{
			$newfile = strtolower($_FILES['newfile']['name']); //rename file
			move_uploaded_file($_FILES['newfile']['tmp_name'], 'uploadfile/newfile/'.$newfile);
			$message = 'Congratulations!  Your file was accepted.';
	   }
	$nfile = 'uploadfile/newfile/'.$newfile;
}	

	

// File 1
$file1 = fopen($lfile, "r");
while (!feof($file1)) {
   $members1[] = fgets($file1);
}
fclose($file1);

// File 2
$file2 = fopen($dfile, "r");

while (!feof($file2)) {
   $members2[] = fgets($file2);
}

fclose($file2);


// File 3
$file3 = fopen($nfile, "r");

while (!feof($file3)) {
   $members3[] = fgets($file3);
}

fclose($file3);

$totalarray = array_merge($members1,$members2);
$result=array_diff($members3,$totalarray);


$wrongval = fopen("wrongval.txt", "r");
while (!feof($wrongval)) {
   $warray[] = fgets($wrongval);
}
fclose($wrongval);


$rightval = fopen("rightval.txt", "r");
while (!feof($rightval)) {
   $rarray[] = fgets($rightval);
}
@fclose($rarray);
$totalval = count($result);

for($i=0; $i<=$totalval; $i++){
	@$rstring[] = str_replace($warray[$i],$rarray[$i],$result[$i]);
}

/// Final Result here

$nfilename = strtolower($_REQUEST['filename']);
$myFile = 'convertedfile/'.$nfilename.".txt";
$fh = fopen($myFile, 'w') or die("can't open file");

foreach ($rstring as $key=>$string) {
//foreach ($result as $key=>$string) {
    fwrite($fh, $string);
}
if($fh){
	?>
    <a href="download.php?filename=<?php echo $nfilename;?>">Download</a> | <a href="index.php">Back</a>
    <?php
}
?>



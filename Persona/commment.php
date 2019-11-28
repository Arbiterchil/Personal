<?php

$name = $_Post["name"];
$text = $_text["mes"];
$post = $_Post["post"];

if ($post) {
	# code...

$write = fopen("com.txt", "a+");
fwrite($write,"<u><b> $name</b></u><br>$text<br>");
fclose($write);

$read = fopen("com.txt", "r+t");
echo "All Comments:<br>";


while (!feof($read)) {
	# code...
	echo fread($read, 1024);
}
 fclose($read);

}
else{


$read = fopen("com.txt", "r+t");
echo "All Comments:<br>";

while (!feof($read)) {
	# code...
	echo fread($read, 1024);
}
fclose($read);
}
?>
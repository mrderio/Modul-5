
<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 5 - Latihan 3</title>
</head>
<body>

<?php

// Nama : Muhammad Derio
// Kelas : 06TPLE012

// file test1 dibuka dan diread
$file = fopen("test1.txt","r");

// perintah while digunakan untuk membaca seluruh file
while(!feof($file))
{
echo fgets($file). "<br />";
}

// kemudian file ditutup
fclose($file);
?>


</body>
</html>

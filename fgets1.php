
<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 5 - Latihan 2</title>
</head>
<body>

<?php
// Nama : Muhammad Derio
// Kelas : 06TPLE012 

// file test1 dibuka dengan mode read
$file = fopen("test1.txt","r");
echo fgets($file);

//kemudian file dibuka
fclose($file);

?>

</body>
</html>

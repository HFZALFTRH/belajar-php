

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"content="width=device-width,initial-scale=1.0">

<title> belajar php </title>
</head>
<body>
    <?php
    $kosakata = "Aku sedang berada pada materi string preg_match()";
    echo "kosakata sebelum di ubah: " . $kosakata ;
    echo "\n";
    echo "kosakata setelah di ubah: " . str_replace("preg_match()", "preg_replace()", $kosakata);
     ?>
    
</body>
 
<header>
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
   // json
    $kelas = array(
        'x' => 'kelas x',
        'xi' => 'kelas xi',
        'xii' => 'kelas xi'
    );

    echo json_encode($kelas);
    foreach ($kelas as $value) {
        echo $value . "<br>";
    };
    echo "<br>";

    $kelasdecode = '{"x" : "angka 1", "xi" : "angka 2", "xii" : "angka 3"}';
    var_dump(json_decode($kelasdecode));
     $objek = json_decode($kelasdecode);
     print $object->

     ?>
     
    
</body>
 
<header>
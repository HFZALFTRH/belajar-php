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
  for($awal = 1; $awal <= 10; $awal++) {
    echo "nilai: " . $awal . "<br>";
  }

  echo "<br>";

  for($awal = 1;; $awal++) {
    if ($awal > 10) {
        break;
    }
    echo $awal;
  }

  $i = 1;
  for (; ; ) {
      if ($i > 10) {
          break;
      }
      echo $i;
      $i++;

echo "<br>";

$i = 1;
do {
    echo $i . "";
    $i++;
}while ($i <= 10);

echo "<br>";

$arrayteman = array("kelas x", "kelas xi", "kelas xii", "kelas ga lulus", "saya donatur sekolah");
foreach ($arrayteman as $array) {
    echo $array . "<br>";
}
    ?>
    
</body>
 
<header>
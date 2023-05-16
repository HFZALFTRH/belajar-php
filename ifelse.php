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
  $nilai = 74;

  if($nilai >= 75) {
    echo "kamu sudah diatas kkm";
    echo "<br>";
    echo "predikat B";
  } else {
    echo "tolol banget";
  }

  echo "<br>";

  $waktu = 10;
  if($waktu <= 10) {
    echo "selamat pagi";
  } else {
    echo "selamat siang";
  }

  echo "<br>"; 

  $nilaitugas = 80;
  if ($nilaitugas >= 90) {
  echo "selamat kamu nilainya bagus!";
  } elseif ($nilaitugas >= 85) {
    echo "selamt, kamu nilainya cukup bagus";
  }elseif($nilaitugas >= 80){
    echo "selamt, kamu nilainya cukup bagus";
  }elseif($nilaitugas >= 80){
    echo "selamt, kamu nilainya cukup bagus";
  } else {
    echo "selamat kamu remedial";
  }

  $hari = "senin";
  switch ($hari) {
    case 'senin':
        echo "hari ini adalah senin";
        break;
        case 'selasa':
            echo "hari ini adaah selasa";
            break;
            case 'rabu':
                echo "hari ini adaah rabu";
                break;
                case 'kamis':
                    echo "hari ini adaah kamis";
                    break;
                    case 'jumat':
                        echo "hari ini adaah jumat";
                        break;
                        case 'sabtu':
                            echo "hari ini adaah sabtu";
                            break;
                            default:
                            echo "hari ini minggu, pengen ngajak dia pegi main";
                            break;
  }
    ?>
    
</body>
 
<header>
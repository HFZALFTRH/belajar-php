<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"content="width=device-width,initial-scale=1.0">

<title>PHP FORM HANDLING</title>
</head>
<body>
<?php
$namalengkap = '';
$kelas = '';

$namalengkaperor = '';
$kelaseror = '';

function datatype($datakelas)
{
    $inputdata = trim($datakelas);
    $inputdata = stripslashes($datakelas);
    $inputdata = htmlspecialchars($datakelas);
    return $inputdata;
}


if ($_SERVER["REQUEST_METHOD"] === "POST"){
    if (empty($_POST['namalengkap'])) {
        $namalengkaperor = "nama lengkap tidak boleh kosong,mharus diisikan.";
    } else {
        $namalengkap = datatype($_POST["namalengkap"]);
    }
    if (empty($_POST['kelas'])) {
        $kelaseror = "kelas tidak boleh kosong, harus diisikan.";
    } else {
        $kelas = datatype($_POST['kelas']);
    }
}


?>

<form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div style="margin-bottom: 3px;">
<label for="username">username</label>
<input type="text" id="username" name="namalengkap" placeholder="masukan nama anda"/>
<span style="color:red; font-size:12px"> <?php echo $namalengkaperor; ?></span>
</div>
<div style="margin-bottom:3px;">
<label for="kelas">kelas</label>
<input type="number" id="kelas" name="kelas" placeholder="kelas berapakah anda anda sekalian"/>
<span style="color:red; font-size:12px"><?php echo $kelaseror; ?></span>
</div>
<button type="submit">simpan</button>
</form>

<?php
echo "<br>";
echo "cewe gw namanya " . $namalengkap;
echo "<br>";
echo "kelas " . $kelas;
?>

<?php echo "today is " . date("d M Y"); ?>
<?php include './include.php' ; ?>
<?php include '../form/include.php'; ?>


?>
</body>
 
<header>
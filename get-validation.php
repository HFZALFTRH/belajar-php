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

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $namalengkap = datatype($_POST['namalengkap']);
    $kelas = datatype($_POST['kelas']);
}

Function datatype($datakelas)
{
    $inputdata = trim($datakelas);
$inputdata = stripslashes($datakelas);
$inputdata = htmlspecialchars($datakelas);
return $inputdata;
}



?>

<form action= "<?php echo htmlspecialchars($SERVER['PHP_SELF']); ?>" method="POST">
    <div style="margin-bottom: 3px;">
<label for="username">username</label>
<input type="text" id="username" name="namalengkap" placeholder="masukan nama anda"/>
</div>
<label for="kelas">kelas</label>
<input type="text" id="username" name="username" placeholder="kelas berapakah anda anda sekalian"/>
</div>
<br></br>
<input type="submit" value="simpan nama">
</form>

<?php
echo "<br>";
echo "nama lengkap saya" . $namalengkap;
echo "<br>";
echo "kelas saya " . $kelas;
?>
</body>
 
<header>
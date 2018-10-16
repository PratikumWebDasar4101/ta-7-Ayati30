<?php
require_once("db.php");
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$program_studi  = $_POST['program_studi'];
$fakultas       = $_POST['fakultas'];
$asal           = $_POST['asal'];
$moto           = $_POST['moto'];

$sql = "UPDATE datamhs SET nama='$nama', jenis_kelamin='$jenis_kelamin', program_studi='$program_studi',
fakultas='$fakultas', asal='$asal', moto='$moto' WHERE nim='$nim'";

if (mysqli_query($conn, $sql)) {
	header("Location: haldata.php");
} else {
	echo "Error" . $sql . "<br>" . mysqli_error($conn);
}
?>

<?php
session_start();
require_once ("db.php");
if (isset($_POST['submit'])) {

$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$program_studi  = $_POST['program_studi'];
$fakultas       = $_POST['fakultas'];
$asal           = $_POST['asal'];
$moto           = $_POST['moto'];

}
$sql = "insert into datamhs (nim, nama, jenis_kelamin, program_studi,fakultas, asal, moto)
        value ('$nim', '$nama', '$jenis_kelamin', '$program_studi', '$fakultas', '$asal', '$moto')";

if (mysqli_query($conn, $sql)) {
  header("Location: haldata.php");
} else {
  echo "error".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

?>

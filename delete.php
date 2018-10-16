<?php
require_once("db.php");
if(isset($_GET["nim"])) {
    $nim = $_GET["nim"];
    $sql = "DELETE FROM datamhs WHERE nim=$nim";
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        echo "Berhasil di hapus";
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}else {
    header("Location: haldata.php");
}

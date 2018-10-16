<?php
require_once ("db.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<table>
			<tr>
				<td>
					<h3 align="center">Data Mahasiswa</h3>
					<form action="haldata.php" method="get">
						<table align="center" border="1">
							<tr>
								<td></td>
									<a href="formdata.php">Tambah Data</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="text" name="datamhs">
										<input type="submit" name="cari" value="cari"></td>
					</form>
				</td>
			</tr>
			<tr>
				<th>Nama</th>
				<th>NIM</th>
				<th>Aksi</th>
			</tr>
			<?php
			$cari = $_POST['cari'];
			$sql 	= "SELECT nim, nama FROM datamhs WHERE nim LIKE '%$cari%'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_num_rows($result);
			if (mysqli_num_rows($result) > 0 ) {
				while ($row = mysqli_fetch_assoc($result)) {
					$nim = $row['nim'];
			?>
			<tr>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['nim']; ?></td>
				<td <a href="delete.php?nama=<?php echo $row['nama'] ?>">Delete</a> |
					<a href="update.php?nim=<?php echo $row['nim'] ?>">Edit</a</td>
			</tr>
			<?php
			}
				} else {
					echo "Data Tidak tersedia";
			}
				mysqli_close($conn);
			?>
		</body>
		</table>
	</html>

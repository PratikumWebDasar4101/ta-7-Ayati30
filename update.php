<?php
	require_once("db.php");
	$nim = $_GET['nim'];
	$sql = "SELECT * FROM datamhs WHERE nim='$nim'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Update</title>
	</head>
	<body>
		<h3 align="center">Form Update</h3>
		<form action="prosesupdate.php" method="post">
		 <table align="center" border="1">
				<tr>
					<th>Nama</th>
					<td><input type="text" name="nama" value="<?php echo $row["nama"]; ?>"></td>
				</tr>
				<tr>
					<th>Nim</th>
					<td><input type="text" name="nim" value="<?php echo $row["nim"]; ?>" disabled></td>
						<input type="hidden" name="nim" value="<?php echo $row["nim"]; ?>">
				</tr>
				<tr>
					<th>Jenis Kelamin</th>
					<<td><input type="radio" name="jenis_kelamin" value="pria" <?php if($row["jenis_kelamin"]=="pria"):echo "checked";endif; ?>>pria<br>
                <input type="radio" name="jenis_kelamin" value="wanita" <?php if($row["jenis_kelamin"]=="wanita"):echo "checked";endif; ?>>wanita<br></td>
				</tr>
				<td>Prodi</td>
                    <td>:</td>
                    <td>
                        <select name="program_studi">
                            <option <? if($row["program_studi"]=="D3MI"): echo "selected";endif?>> D3MI</option>
                            <option <? if($row["program_studi"]=="D3MP"): echo "selected";endif?>>D3MP</option>
                            <option <? if($row["program_studi"]=="D3KA"): echo "selected";endif?>>D3KA</option>
                            <option <? if($row["program_studi"]=="D3IF"): echo "selected";endif?>>D3IF</option>
                            <option <? if($row["program_studi"]=="D3TK"): echo "selected";endif?>>D3TK</option>
                        </select>
                    </td>
				<tr>
                <td>Fakultas</td>
                <td> : </td>
                <td>
                <select name="fakultas">
                <option <?php if($row["fakultas"]=="FEB"):echo "selected";endif?>>FEB</option>
                <option <?php if($row["fakultas"]=="FKB"):echo "selected";endif?>>FKB</option>
                <option <?php if($row["fakultas"]=="FRI"):echo "selected";endif?>>FIK</option>
                <option <?php if($row["fakultas"]=="FIK"):echo "selected";endif?>>FRI</option>
                <option <?php if($row["fakultas"]=="FTE"):echo "selected";endif?>>FTE</option>
                <option <?php if($row["fakultas"]=="FIF"):echo "selected";endif?>>FIF</option>
                <option <?php if($row["fakultas"]=="FIT"):echo "selected";endif?>>FIT</option>
                </select>
            </td>
            </tr>
				<tr>
					<th>Asal</th>
					<td><input type="text" name="asal" value="<?php echo $row["asal"]; ?>"></td>
				</tr>
				<tr>
							 <td>Moto Hidup</td>
							 <td>:</td>
							 <td><textarea name="moto" id="" cols="30" rows="1"><?php echo $row["moto"]?></textarea></td>
					 </tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="sumbit" value="submit"></td>
				</tr>
			</table>
		</form>
	</body>
	</html>

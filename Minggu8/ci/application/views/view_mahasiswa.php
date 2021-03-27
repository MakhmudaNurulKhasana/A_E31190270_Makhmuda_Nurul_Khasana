<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mahasiswa</title>
	<style>
		table, td, th, td {
			border: 1px solid black;
			padding: 2px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<th>No</th>
		<th>Mahasiswa</th>
		<th>Prodi</th>
		<?php $no=1; foreach ($Mahasiswa as $row) : ?>
		<tr>
			<td><?= $no?></td>
			<td><?= $row['nama'] ?></td>
			<td><?= $row['prodi'] ?></td>
		</tr>
		<?php $no++; endforeach ?>
	</table>
</body>
</html>
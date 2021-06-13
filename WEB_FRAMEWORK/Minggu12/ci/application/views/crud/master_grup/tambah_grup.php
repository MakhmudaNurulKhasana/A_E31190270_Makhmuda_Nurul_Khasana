<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Grup</title>
	<link rel="stylesheet" href="<?php echo base_url();?>ass/css/bootstrap.min.css">
  <!--untuk memanggil file bootstrap pada folder ass/css -->
</head>

<body>
 <div class="col-lg-7">
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Tambah Grup</h1>
      </div>
        <form class="user" action="<?php echo base_url('Grup/input');?>" method="post">
          <!--pada saat button tambah user diklik, akan menjalankan function input pada controller Mahasiswa -->
          <div class="form-group"> <!--untuk membuat field username -->
            <input type="text" id="id_grup" name="id_grup" class="form-control form-control-user" placeholder="ID Grup" required />
          </div>

          <div class="form-group"> <!-- untuk membuat option grup user-->
            <select id="grup" class="form-control" name="grup" required="">
              <option value="0">Pilih Grup User</option>
              <option value="admin">Admin</option>
              <option value="user">User</option>
            </select>
          </div>

          <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah">
          <!--untuk membuat button tambah data-->
        </form></hr>
        <div class="text-center">
          <a class="small" href="index">Kembali</a>
          <!--link untuk kembali ke halaman index awal-->
      </div>
    </div>
  </div>
</body>
    <!-- Akhir Card Form -->
    <script type="text/javascript" src="<?php echo base_url();?>ass/js/bootstrap.min.js"></script>
    <!--untuk memanggil file bootstrap pada folder ass/js-->
</body>

</html>
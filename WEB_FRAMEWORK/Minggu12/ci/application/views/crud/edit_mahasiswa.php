<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <link rel="stylesheet" href="<?php echo base_url();?>ass/css/bootstrap.min.css">
  <!--untuk memanggil file bootstrap pada folder ass/css -->
</head>

<body>
 <div class="row">
  <div class="col-lg-7">
  <div class="p-5">
    <div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Edit User</h1>
    </div>
    <?php foreach($user as $baris){ ?>
      <form class="user" action="<?php echo base_url('Mahasiswa/update');?>"
        method="post">
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $baris->id; ?>">
          <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Maximal 10 Character" value="<?php
          echo $baris->username; ?>" require>
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password Maximal 6 Character" value="<?php echo
          $baris->password; ?>" require >
        </div>
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Full Name" value="<?php echo $baris->nama; ?>"
          require>
        </div>
        <div class="form-group">
          <select id="grup" class="form-control" name="grup" require>
            <option value="1" <?php if(($baris->grup)== 1){ echo "selected";}?>>Admin</option>
              <option value="2" <?php if(($baris->grup)== 2){ echo "selected";}?>>User</option>
              </select>
            </div>
              <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Update">
            </form><?php } ?><hr>
            <div class="text-center">
              <a class="small" href="<?php echo base_url('Mahasiswa')?>">Kembali</a>
          </div>
        </div>
      </div>
    </div>
        </body>
        <!-- Akhir Card Form -->
        <script type="text/javascript" src="<?php echo base_url();?>ass/js/bootstrap.min.js"></script>
        <!--untuk memanggil file bootstrap pada folder ass/js-->
      </body>

      </html>
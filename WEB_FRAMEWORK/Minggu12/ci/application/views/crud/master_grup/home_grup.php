<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title></title>
 <link rel="stylesheet" href="<?php echo base_url();?>ass/css/bootstrap.min.css">
 <!-- untuk mengakses file css bootstrap pada folder ass-->
</head>
<body>
    <div class="card shdow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text primary">DataTables Grup</h6></div>
            <div class="card-body"> <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead> <!-- untuk membuat kolom tabel -->
                      <tr><th>No</th>
                        <th>ID Grup</th>
                        <th>Nama Grup</th>
                        <th>Aksi</th></tr>
                    </thead>
                    <tfoot>
                        <tbody> <!-- untuk menampung baris data pada table -->
                            <?php 
                            $no = 1; //no default 1
                            foreach ($user as $baris) { //
                             ?>
                             <tr>
                                <td><?php echo $no++; ?></td>
                                <!-- nomor user otomatis bertambah pada saatn menambah data -->
                                <td><?php echo $baris->id_grup; ?></td> 
                                <!--untuk menampilkan username -->
                                <td><?php echo $baris->grup; ?></td>
                                <!--untuk menampilkan jenis grup-->
                                <td>
                                    <?php
                                    if($getGrup==1) {
                                   echo '<a href="'.base_url('Grup/edit/'.$baris->id_grup).'" class="fa fa-edit"></a>';
                                    echo " ";
                                    echo '<a href="'.base_url('Grup/hapus/'.$baris->id_grup).'" class="fa fa-times"></a>';
                                }
                                    ?></td>
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>
                <a href="<?php echo base_url('Grup/tambah')?>" class="btn btn-success btn-icon-split"> Tambah Data</a>
                    <!-- untuk mengakses file function tambah pada controller Mahasiswa-->
                </div>
            </div>
        </div>
    </body>
    </html>
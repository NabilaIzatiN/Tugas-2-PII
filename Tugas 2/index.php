<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Data Parfume</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-secondary bg-light">
  <a class="navbar-brand" href="#">
<h1>Data Parfume</h1></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Data Produk Parfume <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./penjualan">Penjualan</a>
      </li>
    
    </ul>
   
  </div>
</nav>
<div class="container">
    <br>
<a href="#" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>

<a href="print.php" class="btn btn-light" target="_blank">Cetak Data</a>
<br>
<br>
<table class="table">
<thead>
<tr>
<th>No.</th>
<th>Kode Parfume</th>
<th>Jenis Parfume</th>
<th>Merk Parfume</th>
<th>Variasi Parfume</th>
<th>Isi Parfume</th>
<th>Harga</th>
<th>Keterangan</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data(); if (!empty($result)) {
foreach ($result as $data) : ?>
<tr>
<td><?= $index++ ?></td>
<td><?= $data->kd_parfume ?></td>
<td><?= $data->jenis ?></td>
<td><?= $data->merk ?></td>
<td><?= $data->varian ?></td>
<td><?= $data->isi ?></td>
<td>Rp. <?= $data->harga ?></td>
<td><?= $data->ket ?></td>

<td>
<a name="edit" id="edit" href="edit.php?kd_parfume=<?= $data->kd_parfume ?>">Edit</a> /
<a name="hapus" id="hapus" href="proses.php?kd_parfume=<?= $data->kd_parfume ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else { ?>
<tr>
<td colspan="9">Data Parfume Belum Tersedia.</td>
</tr>
 
<?php } ?>
</tbody>
</table>





<!-- Modal -->
<form action="proses.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" Nabi-labelledby="exampleModalLabel" Nabi-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" Nabi-label="Close">
          <span Nabi-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          <div class="form-group">
              <label>Kode Parfume</label>
              <input class="form-control" type="text" name="kd_parfume">
</div>
              <div class="form-group">
                  <label>Jenis Parfume</label>
                      <input class="form-control" type="text" name="jenis">
</div>
                      <div class="form-group">
                          <label>Merk Parfume</label>
                          <input class="form-control" type="text" name="merk">
</div>
                      <div class="form-group">
                          <label>Variasi Parfume</label>
                          <input class="form-control" type="text" name="variasi">
</div>
                      <div class="form-group">
                          <label>Isi Parfume</label>
                          <input class="form-control" type="text" name="isi">
</div>
                          <div class="form-group">
                              <label>harga</label>
                              <input class="form-control" type="number" name="harga">
</div>
                    <div class="form-group">
                          <label>Keterangan</label>
                          <input class="form-control" type="text" name="ket">
</div>
                    
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="submit" name="submit_simpan" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>

</div> <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>
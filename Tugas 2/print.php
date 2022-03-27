<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Cetak Data</title>
<style>
h1 {
text-align: center;
}

table, td,
th {
border: 1px solid #ddd; text-align: left;
}

table {
border-collapse: collapse; width: 100%;
}

th,
td {
padding: 15px;
}
</style>
</head>

<body>
<h1>Laporan Data Parfume</h1>
<table>
<thead>
<tr>
<th>No.</th>
<th>Kode Parfume</th>
<th>Jenis</th>
<th>Merk</th>
<th>Variasi</th>
<th>Isi Parfume</th>
<th>Harga</th>
<th>Keterangan</th>
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
    <td><?= $data->variasi ?></td>
    <td><?= $data->isi ?></td>
    <td><?= $data->harga ?></td>
    <td><?= $data->ket ?></td>
    </tr>
    <br><br><br>
    <?php endforeach;
    } else { ?>
    <tr>
    <td colspan="9">Belum Terdapat Data Parfume yang Tersedia.</td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <script>
    window.print();
    </script>
    </body>
    
    </html>
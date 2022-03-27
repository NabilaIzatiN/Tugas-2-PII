<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
$pembeli = $_POST['pembeli'];
$kd_parfume = $_POST['kd_parfume'];
$jumlah = $_POST['jumlah'];
$model = new Model();
$model->insert($pembeli, $kd_parfume,  $jumlah); header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
  
    $kode_jual = $_POST['kode_jual'];
    $pembeli = $_POST['pembeli'];
    $kd_parfume = $_POST['kd_parfume'];
    $jumlah = $_POST['jumlah'];
    $model = new Model();
    $model->update($kode_jual, $pembeli, $kd_parfume, $jumlah); header('location:index.php');
    }
    if (isset($_GET['kode_jual'])) {
    $id = $_GET['kode_jual'];
    $model = new Model();
    $model->delete($id); header('location:index.php');
    }
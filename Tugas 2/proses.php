<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
$kd_parfume = $_POST['kd_parfume'];
$jenis = $_POST['jenis'];
$merk = $_POST['merk'];
$varian = $_POST['varian'];
$isi = $_POST['isi'];
$harga = $_POST['harga'];
$ket = $_POST['ket'];
$model = new Model();
$model->insert($kd_parfume, $jenis, $merk, $varian, $isi, $harga, $ket); header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
   
    $kd_parfume = $_POST['kd_parfume'];
    $jenis = $_POST['jenis'];
    $merk = $_POST['merk'];
    $varian = $_POST['varian'];
    $isi = $_POST['isi'];
    $harga = $_POST['harga'];
    $ket = $_POST['ket'];
    $model = new Model();
    $model->update($kd_parfume, $jenis, $merk, $varian, $isi, $harga, $ket); header('location:index.php');
    }
    if (isset($_GET['kd_parfume'])) {
    $id = $_GET['kd_parfume'];
    $model = new Model();
    $model->delete($id); header('location:index.php');
    }
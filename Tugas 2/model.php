<?php
include 'connection.php'; 
class Model extends Connection
{
public function __construct()
{
    $this->conn = $this->get_connection();
}
public function insert($kd_parfume, $jenis, $merk, $varian, $isi, $harga, $ket)
{
   
    $sql = "INSERT INTO tbl_parfume (kd_parfume, merk, varian, harga) VALUES ('$kd_parfume', '$merk',
    '$varian', '$harga')";
    $this->conn->query($sql);
}

public function tampil_data()
{
$sql = "SELECT * FROM tbl_parfume";

$bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) { return $baris;
    }
    }
    public function edit($id)
    {
    $sql = "SELECT * FROM tbl_parfume WHERE kd_parfume='$id'";
    $bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
    }
    public function update($kd_parfume, $merk, $variasi, $harga)
    {
    $sql = "UPDATE tbl_parfume SET merk='$merk', variasi='$variasi', harga='$harga' WHERE kd_parfume='$kd_parfume'";
    $this->conn->query($sql);
    }
    public function delete($kd_parfume)
    {
    $sql = "DELETE FROM tbl_parfume WHERE kd_parfume='$kd_parfume'";
    $this->conn->query($sql);
    }
    }
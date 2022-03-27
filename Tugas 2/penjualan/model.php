<?php
include 'connection.php'; 
class Model extends Connection
{
public function __construct()
{
    $this->conn = $this->get_connection();
}
public function insert($pembeli, $kd_parfume, $jumlah)
{
    $total_belanja = 0;
    $aa = "SELECT * FROM tbl_parfume WHERE kd_parfume='$kd_parfume'";

    $bind = $this->conn->query($aa); 
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) 
    {
        $total = $baris[0]->harga * $jumlah;
        $merk = $baris[0]->merk;
        $dda = "UPDATE tbl_parfume SET  merk='$merk' WHERE kd_parfume='$kd_parfume'";
        $this->conn->query($dda);
    }else{
        echo "<center>
        <h1>Merk Parfume tidak ditemukan!</h1><br>
        <a href='./index.php'>Kembali</a>
        </center>
        ";
        die;
    }
    
    $sql = "INSERT INTO penjualan (kode_jual, pembeli, kd_parfume, merk, jumlah, total) VALUES ('', '$pembeli',
    '$kd_parfume','$merk', '$jumlah', '$total')";
    $this->conn->query($sql);
}

public function tampil_data()
{
$sql = "SELECT * FROM penjualan";

$bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) { return $baris;
    }
    }
    public function edit($id)
    {
    $sql = "SELECT * FROM penjualan WHERE kode_jual='$id'";
    $bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
    }
    public function update($kode_jual, $pembeli, $kd_parfume, $jumlah)
    {
        $aa = "SELECT * FROM tbl_parfume WHERE kd_parfume='$kd_parfume'";

        $bind = $this->conn->query($aa); 
        while ($obj = $bind->fetch_object()) {
        $baris[] = $obj;
        }

        $pp = "SELECT * FROM penjualan WHERE kode_jual='$kode_jual'";
        
        $bind = $this->conn->query($pp); 
        while ($obja = $bind->fetch_object()) {
        $p[] = $obja;
        }
       


        $total =  $baris[0]->harga*$jumlah;
        // var_dump($baris);
        $dda = "UPDATE tbl_parfume SET jumlah='$jumlah' WHERE kd_parfume='$kd_parfume'";
        $this->conn->query($dda);

        $jl = "UPDATE penjualan SET pembeli='$pembeli', jumlah='$jumlah',
        total='$total'
        WHERE kode_jual='$kode_jual'";
     
      
        $this->conn->query($jl);
    }
    public function delete($kode_jual)
    {
    $sql = "DELETE FROM penjualan WHERE kode_jual='$kode_jual'";
    $this->conn->query($sql);
    }
    }
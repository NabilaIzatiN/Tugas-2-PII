<?php
$id = $_GET['nim'];
include 'model.php';
$model = new model();
$data = $model->edit($id);
?>
<!doctype html>
<html ;ang="en">
    <head>
        <title>Edit Nilai Mahasiswa</title>
    </head>

    <body>
        <h1>Edit Nilai Mahasiswa</h1>
        <a herf="index.php">Kembali</a>
        <br><br>
        <form action="proses.php" method="post">
            <label>NIM</label>
            <br>
            <input type="text" name="nim" value="<?php echo $data->nim ?>">
            <br>
            <label>Nama</label>
            <input type="text" name="nama" value="<?php echo $data->nama ?>">
            <br>
            <label>UTS</label>
            <input type="text" name="uts" value="<?php echo $data->uts ?>">
            <br>
            <label>UAS</label>
            <input type="text" name="uas" value="<?php echo $data->uas ?>">
            <br>
            <label>Tugas</label>
            <input type="text" name="tugas" value="<?php echo $data->tugas ?>">
            <br><br>
            <button type="submit" name="submit_edit">Submit</button>
        </form>
    </body>
</html>
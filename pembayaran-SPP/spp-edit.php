<?php
$id = $_GET['edit'];
if (isset($_POST['olah'])) {
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    $sql = mysqli_query($koneksi, "UPDATE spp SET tahun = '$tahun',nominal = '$nominal' WHERE id_spp = '$id'");
    if ($sql) {
        echo "
            <script>
            alert('data berhasil diedit');
            location.href='?page=spp'
            </script>
            ";
    } else {
        echo "
            <script>
            alert('data gagal diedit');
            location.href='?page=spp'
            </script>
            ";
    }
}

$sql = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp = '$_GET[edit]'");
$spp = mysqli_fetch_assoc($sql);
$tahun = $spp['tahun'];
$nominal = $spp['nominal'];


?>

<h1 class="h3 mb-3">Data Spp</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Daftar Spp</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-success mb-2" href="?page=siswa">Kembali</a>
                <table class="table">
                    <form action="" method="post">
                        <tr>
                            <td width='200'>Tahun</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="tahun" id="" value="<?= $tahun ?>"></td>
                        </tr>
                        <tr>
                            <td width='200'>Nominal</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="nominal" id="" value="<?= $nominal ?>"></td>
                        </tr>

                        <!-- tombol edit -->
                        <tr>
                            <td width='200'></td>
                            <td width='1'></td>
                            <td class="text-end"><button class="btn btn-primary" name="olah" value="edit" type="submit">Edit Data</button></td>
                        </tr>

                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
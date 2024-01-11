<?php
if (isset($_POST['tambah'])) {
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    if ($_POST['tambah'] === 'tambah') {
        $sql = mysqli_query($koneksi, "INSERT INTO spp VALUES(NUll,$tahun,$nominal)");
        if ($sql) {
            echo "
            <script>
            alert('data berhasil ditambahkan');
            location.href='?page=spp-tambah'
            </script>
            ";
        } else {
            echo "
            <script>
            alert('data gagal ditambahkan');
            location.href='?page=spp-tambah'
            </script>
            ";
        }
    }
}
?>
<h1 class="h3 mb-3">Tambah SPP</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Tambah Spp</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-success mb-2" href="?page=spp">Kembali</a>
                <table class="table">
                    <form action="" method="post">
                        <tr>
                            <td width='200'>Tahun</td>
                            <td width='1'>:</td>
                            <td><input type="number" class="form-control" name="tahun" id="" value=""></td>
                        </tr>
                        <tr>
                            <td width='200'>Nominal</td>
                            <td width='1'>:</td>
                            <td><input type="number" class="form-control" name="nominal" id="" value=""></td>
                        </tr>
                        <!-- tombol tambah -->
                        <tr>
                            <td width='200'></td>
                            <td width='1'></td>
                            <td class="text-end"><button class="btn btn-primary" name="tambah" value="tambah" type="submit">Tambah Data</button></td>
                        </tr>


                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['olah'])) {
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $password = md5($_POST['password']);
    if ($_POST['olah'] === 'tambah') {
        $sql = mysqli_query($koneksi, "INSERT INTO siswa VALUES('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp','$password')");
        if ($sql) {
            echo "
            <script>
            alert('data berhasil ditambahkan');
            location.href='?page=siswa-tambah'
            </script>
            ";
        } else {
            echo "
            <script>
            alert('data gagal ditambahkan');
            location.href='?page=siswa-tambah'
            </script>
            ";
        }
    }
}
?>
<h1 class="h3 mb-3">Tambah Siswa</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Tambah Siswa</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-success mb-2" href="?page=siswa">Kembali</a>
                <table class="table">
                    <form action="" method="post">
                        <tr>
                            <td width='200'>NISN</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="nisn" id="" value=""></td>
                        </tr>
                        <tr>
                            <td width='200'>NIS</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="nis" id="" value=""></td>
                        </tr>
                        <tr>
                            <td width='200'>Nama</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="nama" value="" id=""></td>
                        </tr>
                        <tr>
                            <td width='200'>Nama kelas</td>
                            <td width='1'>:</td>
                            <td>
                                <select class="form-control" name="id_kelas" id="">
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT * FROM kelas");
                                    while ($kelas = mysqli_fetch_assoc($sql)) :
                                    ?>
                                        <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['nama_kelas'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width='200'>alamat</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="alamat" value="" id=""></td>
                        </tr>
                        <tr>
                            <td width='200'>no_telp</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="no_telp" value="" id=""></td>
                        </tr>
                        <tr>
                            <td width='200'>password</td>
                            <td width='1'>:</td>
                            <td><input type="password" class="form-control" name="password" value="" id=""></td>
                        </tr>
                        <!-- tombol tambah -->
                        <tr>
                            <td width='200'></td>
                            <td width='1'></td>
                            <td class="text-end"><button class="btn btn-primary" name="olah" value="tambah" type="submit">Tambah Data</button></td>
                        </tr>


                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
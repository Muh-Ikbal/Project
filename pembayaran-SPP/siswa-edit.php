<?php
$id = $_GET['edit'];
if (isset($_POST['olah'])) {
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $password = md5($_POST['password']);
    $sql = mysqli_query($koneksi, "UPDATE siswa SET nisn = '$nisn',nis = '$nis',nama='$nama',id_kelas='$id_kelas',alamat='$alamat',no_telp='$no_telp' WHERE nisn = '$id'");
    if (isset($_POST['password'])) {
        $sql = mysqli_query($koneksi, "UPDATE siswa SET password = '$password' WHERE nisn = '$id'");
    }
    if ($sql) {
        echo "
            <script>
            alert('data berhasil diedit');
            location.href='?page=siswa'
            </script>
            ";
    } else {
        echo "
            <script>
            alert('data gagal diedit');
            location.href='?page=siswa'
            </script>
            ";
    }
}

$sql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn = '$_GET[edit]'");
$siswa = mysqli_fetch_assoc($sql);
$nis = $siswa['nis'];
$nama = $siswa['nama'];
$id_kelas = $siswa['id_kelas'];
$alamat = $siswa['alamat'];
$no_telp = $siswa['no_telp'];
$password = $siswa['password'];

?>

<h1 class="h3 mb-3">Data Siswa</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Daftar Siswa</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-success mb-2" href="?page=siswa">Kembali</a>
                <table class="table">
                    <form action="" method="post">
                        <tr>
                            <td width='200'>NISN</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="nisn" id="" value="<?= $id ?>"></td>
                        </tr>
                        <tr>
                            <td width='200'>NIS</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="nis" id="" value="<?= $nis ?>"></td>
                        </tr>
                        <tr>
                            <td width='200'>Nama</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="nama" value="<?= $nama ?>" id=""></td>
                        </tr>
                        <tr>
                            <td width='200'>id_kelas</td>
                            <td width='1'>:</td>
                            <td>
                                <select class="form-select" name="id_kelas" id="">
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT * FROM kelas");
                                    while ($kelas = mysqli_fetch_assoc($sql)) :
                                    ?>
                                        <option <?php if($siswa['id_kelas']==$kelas['id_kelas']) echo "selected"?> value="<?= $kelas['id_kelas'] ?>"><?= $kelas['nama_kelas'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width='200'>alamat</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="alamat" value="<?= $alamat ?>" id=""></td>
                        </tr>
                        <tr>
                            <td width='200'>no_telp</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="no_telp" value="<?= $no_telp ?>" id=""></td>
                        </tr>
                        <tr>
                            <td width='200'>password</td>
                            <td width='1'>:</td>
                            <td><input type="password" class="form-control" name="password" id="">
                        *) jika password tidak diganti, maka kosongkan saja
                        </td>
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
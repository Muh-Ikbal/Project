<?php
$id = $_GET['edit'];
if (isset($_POST['olah'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];
    $sql = mysqli_query($koneksi, "UPDATE petugas SET username = '$username',nama_petugas='$nama_petugas',level='$level' WHERE id_petugas = '$id'");
    if (isset($_POST['password'])) {
        $sql = mysqli_query($koneksi, "UPDATE petugas SET password = '$password' WHERE id_petugas = '$id'");
    }
    if ($sql) {
        echo "
            <script>
            alert('data berhasil diedit');
            location.href='?page=petugas'
            </script>
            ";
    } else {
        echo "
            <script>
            alert('data gagal diedit');
            location.href='?page=petugas'
            </script>
            ";
    }
}

$sql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas = '$_GET[edit]'");
$petugas = mysqli_fetch_assoc($sql);
$username = $petugas['username'];
$password = md5($petugas['password']);
$nama_petugas = $petugas['nama_petugas'];
$level = $petugas['level'];

?>

<h1 class="h3 mb-3">Data Petugas</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Daftar Petugas</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-success mb-2" href="?page=petugas">Kembali</a>
                <table class="table">
                    <form action="" method="post">
                        <tr>
                            <td width='200'>Nama Petugas</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="nama_petugas" id="" value="<?= $nama_petugas ?>"></td>
                        </tr>
                        <tr>
                            <td width='200'>Username</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="username" id="" value="<?= $username ?>"></td>
                        </tr>
                        <tr>
                            <td width='200'>Level</td>
                            <td width='1'>:</td>
                            <td>
                                <select class="form-select" name="level" id="">
                                    <option <?php if ($level == 'admin') echo "selected" ?> value="admin">Admin</option>
                                    <option <?php if ($level == 'petugas') echo "selected" ?> value="petugas">Petugas</option>
                                </select>
                            </td>
                        </tr>
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
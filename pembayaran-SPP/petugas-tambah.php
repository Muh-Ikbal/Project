<?php
if (isset($_POST['olah'])) {
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $level = $_POST['level'];
    $password = md5($_POST['password']);
    if ($_POST['olah'] === 'tambah') {
        $sql = mysqli_query($koneksi, "INSERT INTO petugas VALUES(NULL,'$username','$password','$nama_petugas','$level')");
        if ($sql) {
            echo "
            <script>
            alert('data berhasil ditambahkan');
            location.href='?page=petugas-tambah'
            </script>
            ";
        } else {
            echo "
            <script>
            alert('data gagal ditambahkan');
            location.href='?page=petugas-tambah'
            </script>
            ";
        }
    }
}
?>
<h1 class="h3 mb-3">Tambah Petugas</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Tambah Petugas</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-success mb-2" href="?page=petugas">Kembali</a>
                <table class="table">
                    <form action="" method="post">
                        <tr>
                            <td width='200'>Nama Petugas</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="nama_petugas" id="" value=""></td>
                        </tr>
                        <tr>
                            <td width='200'>Username</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="username" id="" value=""></td>
                        </tr>
                        <tr>
                            <td width='200'>Level</td>
                            <td width='1'>:</td>
                            <td>
                                <select class="form-select" name="level" id="">
                                    <option value="petugas">Petugas</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </td>
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
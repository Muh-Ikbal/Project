<?php
$id = isset($_GET['edit']);

if (isset($_GET['edit'])) {
    $sql = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas = $_GET[edit]");
    $kelas = mysqli_fetch_assoc($sql);
    $nama_kelas = $kelas['nama_kelas'];
    $kompetensi_keahlian = $kelas['kompetensi_keahlian'];
} else {
    $nama_kelas = '';
    $kompetensi_keahlian = '';
}

?>

<h1 class="h3 mb-3">Data Kelas</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Daftar Kelas</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-success mb-2" href="?page=kelas">Kembali</a>
                <table class="table">
                    <form action="?page=kelas-proses" method="post">
                        <input type="hidden" name="id" value='<?=$id?>'>
                        <tr>
                            <td width='200'>Nama Kelas</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="nama_kelas" id="" value="<?= $nama_kelas ?>"></td>
                        </tr>
                        <tr>
                            <td width='200'>Kompetensi Keahlian</td>
                            <td width='1'>:</td>
                            <td><input type="text" class="form-control" name="keahlian" value="<?= $kompetensi_keahlian ?>" id=""></td>
                        </tr>
                        <?php
                        if (isset($_GET['tambah'])) :
                        ?>
                            <!-- tombol tambah -->
                            <tr>
                                <td width='200'></td>
                                <td width='1'></td>
                                <td class="text-end"><button class="btn btn-primary" name="olah" value="tambah" type="submit">Tambah Data</button></td>
                            </tr>
                        <?php else : ?>
                            <!-- tombol edit -->
                            <tr>
                                <td width='200'></td>
                                <td width='1'></td>
                                <td class="text-end"><button class="btn btn-primary" name="olah" value="edit" type="submit">Edit Data</button></td>
                            </tr>
                        <?php endif; ?>

                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
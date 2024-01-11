<h1 class="h3 mb-3">Data Petugas</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Daftar Petugas</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-success mb-2" href="?page=petugas-tambah">Tambah</a>
                <table class="table ">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM petugas");
                        while ($petugas = mysqli_fetch_assoc($sql)) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $petugas['nama_petugas'] ?></td>
                                <td><?= $petugas['username'] ?></td>
                                <td><?= $petugas['level'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="?page=petugas-edit&edit=<?= $petugas['id_petugas'] ?>">edit</a>
                                    <a class="btn btn-danger" href="?page=petugas-hapus&hapus=<?= $petugas['id_petugas'] ?>">hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
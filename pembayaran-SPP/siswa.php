<h1 class="h3 mb-3">Data Siswa</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Daftar Siswa</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-success mb-2" href="?page=siswa-tambah">Tambah</a>
                <table class="table ">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nisn</th>
                            <th>Nis</th>
                            <th>nama</th>
                            <th>Nama kelas</th>
                            <th>Alamat</th>
                            <th>no_telp</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM siswa LEFT JOIN kelas on siswa.id_kelas=kelas.id_kelas ORDER BY nisn");
                        while ($siswa = mysqli_fetch_assoc($sql)) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $siswa['nisn'] ?></td>
                                <td><?= $siswa['nis'] ?></td>
                                <td><?= $siswa['nama'] ?></td>
                                <td><?= $siswa['nama_kelas'] ?></td>
                                <td><?= $siswa['alamat'] ?></td>
                                <td><?= $siswa['no_telp'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="?page=siswa-edit&edit=<?= $siswa['nisn'] ?>">edit</a>
                                    <a class="btn btn-danger" href="?page=siswa-hapus&hapus=<?= $siswa['nisn'] ?>">hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
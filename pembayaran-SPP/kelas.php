<h1 class="h3 mb-3">Data Kelas</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Daftar Kelas</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-success mb-2" href="?page=kelas-olah&tambah">Tambah</a>
                <table class="table ">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kelas</th>
                            <th>Kompetensi Keahlian</th>
                            <th>keahlian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY nama_kelas");
                        while ($kelas = mysqli_fetch_assoc($sql)) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $kelas['nama_kelas'] ?></td>
                                <td><?= $kelas['kompetensi_keahlian'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="?page=kelas-olah&edit=<?= $kelas['id_kelas'] ?>">edit</a>
                                    <a class="btn btn-danger" href="?page=kelas-proses&hapus=<?= $kelas['id_kelas'] ?>">hapus</a>
                                </td>

                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
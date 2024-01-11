<h1 class="h3 mb-3">Data SPP</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Daftar Spp</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-success mb-2" href="?page=spp-tambah">Tambah</a>
                <table class="table ">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM spp");
                        while ($spp = mysqli_fetch_assoc($sql)) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $spp['tahun'] ?></td>
                                <td><?= number_format($spp['nominal']) ?></td>
                                <td>
                                    <a class="btn btn-warning" href="?page=spp-edit&edit=<?= $spp['id_spp'] ?>">edit</a>
                                    <a class="btn btn-danger" href="?page=spp-hapus&hapus=<?= $spp['id_spp'] ?>">hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
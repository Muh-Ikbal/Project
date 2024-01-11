<h1 class="h3 mb-3">Data Siswa</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Daftar Siswa</h5>
            </div>
            <div class="card-body">
                <?php if (isset($_SESSION['user']['level'])) : ?>
                    <a class="btn btn-primary mb-2" href="?page=pembayaran">Tambah</a>
                <?php endif; ?>
                <a class="btn btn-success mb-2" target="_blank" href="laporan.php">Generate Laporan</a>
                <table class="table ">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Petugas</th>
                            <th>Siswa</th>
                            <th>Tanggal Bayar</th>
                            <th>Bulan Dibayar</th>
                            <th>Tahun Dibayar</th>
                            <th>SPP</th>
                            <th>Jumlah Bayar</th>
                            <?php if (isset($_SESSION['user']['level'])) : 
                                $where = "";
                                ?>
                                <th>aksi</th>
                            <?php else: 
                                $where = " WHERE pembayaran.nisn='". $_SESSION['user']['nisn']."'";
                            endif;
                            ?>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM pembayaran LEFT JOIN siswa on pembayaran.nisn=siswa.nisn LEFT JOIN petugas on pembayaran.id_petugas=petugas.id_petugas LEFT JOIN spp on pembayaran.id_spp=spp.id_spp $where ORDER BY nama");
                        while ($data = mysqli_fetch_assoc($sql)) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['nama_petugas'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['tgl_bayar'] ?></td>
                                <td><?= $data['bulan_bayar'] ?></td>
                                <td><?= $data['tahun_dibayar'] ?></td>
                                <td><?= number_format($data['nominal']) ?></td>
                                <td><?= number_format($data['jumlah_bayar']) ?></td>
                                <?php if (isset($_SESSION['user']['level'])) : ?>
                                    <td>
                                        <a class="btn btn-danger" href="?page=pembayaran-hapus&hapus=<?= $data['id_pembayaran'] ?>">hapus</a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
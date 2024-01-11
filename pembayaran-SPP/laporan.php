<?php
require("koneksi.php");
session_start();
if (isset($_SESSION['user']['level'])) {
    $where = "";
} else {
    $where = " WHERE pembayaran.nisn= '" . $_SESSION['user']['nisn'] ."'";
}

?>
<table border="1" cellpadding="5" cellspacing="0" width="100%" accesskey="">
    <thead>
        <tr style="margin: 0;">
            <th colspan="9" style="margin: 0;">LAPORAN PEMBAYARAN SPP</th>
        </tr>
    </thead>
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
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $sql = mysqli_query($koneksi, "SELECT * FROM pembayaran LEFT JOIN siswa on pembayaran.nisn=siswa.nisn LEFT JOIN petugas on pembayaran.id_petugas=petugas.id_petugas LEFT JOIN spp on pembayaran.id_spp=spp.id_spp $where ORDER BY nama ");
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

            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<script type="text/javascript">
    window.print();
</script>
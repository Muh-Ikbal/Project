<?php 
if(isset($_POST['simpan'])){
    $id_petugas = $_POST['id_petugas'];
    $nisn = $_POST['nisn'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $bulan_bayar = $_POST['bulan_bayar'];
    $tahun_bayar = $_POST['tahun_bayar'];
    $id_spp = $_POST['id_spp'];
    $jumlah_bayar = $_POST['jumlah_bayar'];
    
    $queri = mysqli_query($koneksi,"INSERT INTO pembayaran (id_petugas,nisn,tgl_bayar,bulan_bayar,tahun_dibayar,id_spp,jumlah_bayar) VALUES($id_petugas,'$nisn','$tgl_bayar','$bulan_bayar','$tahun_bayar',$id_spp,$jumlah_bayar)");
    if($queri){
        echo "
        <script>alert('entire data pembayaran berhasil')</script>
        ";
    }
}
?>
<h1 class="h3 mb-3">Entire Data Pembayaran</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <table class="table ">
                        <tr>
                            <td width='200'>Petugas</td>
                            <td width='1'>:</td>
                            <td>
                                <select class="form-select" name="id_petugas" id="">
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT * FROM petugas");
                                    while ($petugas = mysqli_fetch_assoc($sql)) :
                                    ?>
                                        <option value="<?= $petugas['id_petugas'] ?>"><?= $petugas['nama_petugas'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width='200'>Siswa</td>
                            <td width='1'>:</td>
                            <td>
                                <select class="form-select" name="nisn" id="">
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY nama");
                                    while ($siswa = mysqli_fetch_assoc($sql)) :
                                    ?>
                                        <option value="<?= $siswa['nisn'] ?>"><?= $siswa['nama'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width='200'>Tanggal Bayar</td>
                            <td width='1'>:</td>
                            <td>
                                <input class="form-control" type="date" name="tgl_bayar" id="">
                            </td>
                        </tr>

                        <tr>
                            <td width='200'>Bulan bayar</td>
                            <td width='1'>:</td>
                            <td>
                                <select class="form-select" name="bulan_bayar" id="">
                                    <option value="januari">januari</option>
                                    <option value="februari">februari</option>
                                    <option value="maret">maret</option>
                                    <option value="april">april</option>
                                    <option value="juni">juni</option>
                                    <option value="juli">juli</option>
                                    <option value="agustus">agustus</option>
                                    <option value="september">september</option>
                                    <option value="oktober">oktober</option>
                                    <option value="november">november</option>
                                    <option value="desember">desember</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width='200'>Tahun Bayar</td>
                            <td width='1'>:</td>
                            <td>
                                <input class="form-control" type="number" name="tahun_bayar" id="">
                            </td>
                        </tr>
                        <tr>
                            <td width='200'>SPP</td>
                            <td width='1'>:</td>
                            <td>
                                <select class="form-select" name="id_spp" id="">
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT * FROM spp");
                                    while ($spp = mysqli_fetch_assoc($sql)) :
                                    ?>
                                        <option value="<?= $spp['id_spp'] ?>"><?= number_format($spp['nominal']) . " ($spp[tahun])" ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width='200'>Jumlah bayar</td>
                            <td width='1'>:</td>
                            <td>
                                <input class="form-control" type="number" name="jumlah_bayar" id="">
                            </td>
                        </tr>
                        <tr>
                            <td width='200'></td>
                            <td width='1'></td>
                            <td class="text-end"><button class="btn btn-primary" name="simpan" value="simpan" type="submit">Simpan</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
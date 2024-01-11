<?php
$sql = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$_GET[hapus]'");
if ($sql) {
    echo "
            <script>
            alert('data berhasil dihapus');
            location.href='?page=petugas'
            </script>
            ";
} else {
    echo "
            <script>
            alert('data gagal dihapus');
            location.href='?page=petugas'
            </script>
            ";
}

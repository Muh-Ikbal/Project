<?php
$sql = mysqli_query($koneksi, "DELETE FROM pembayaran WHERE id_pembayaran='$_GET[hapus]'");
if ($sql) {
    echo "
            <script>
            alert('data berhasil dihapus');
            location.href='?page=history'
            </script>
            ";
} else {
    echo "
            <script>
            alert('data gagal dihapus');
            location.href='?page=history'
            </script>
            ";
}

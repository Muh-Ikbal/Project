<?php
$sql = mysqli_query($koneksi, "DELETE FROM spp WHERE id_spp='$_GET[hapus]'");
if ($sql) {
    echo "
            <script>
            alert('data berhasil dihapus');
            location.href='?page=spp'
            </script>
            ";
} else {
    echo "
            <script>
            alert('data gagal dihapus');
            location.href='?page=spp'
            </script>
            ";
}

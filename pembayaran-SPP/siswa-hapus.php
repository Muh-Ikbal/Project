<?php
$sql = mysqli_query($koneksi, "DELETE FROM siswa WHERE nisn='$_GET[hapus]'");
if ($sql) {
    echo "
            <script>
            alert('data berhasil dihapus');
            location.href='?page=siswa'
            </script>
            ";
} else {
    echo "
            <script>
            alert('data gagal dihapus');
            location.href='?page=siswa'
            </script>
            ";
}

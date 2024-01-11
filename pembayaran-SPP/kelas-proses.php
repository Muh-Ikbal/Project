<?php
if (isset($_POST['olah'])) {
    $nama_kelas = $_POST['nama_kelas'];
    $kompetensi_keahlian = $_POST['keahlian'];
    if ($_POST['olah'] === 'tambah') {
        $sql = mysqli_query($koneksi, "INSERT INTO kelas VALUES('','$nama_kelas','$kompetensi_keahlian')");
        if ($sql) {
            echo "
            <script>
            alert('data berhasil ditambahkan');
            location.href='?page=kelas'
            </script>
            ";
        } else {
            echo "
            <script>
            alert('data gagal ditambahkan');
            location.href='?page=kelas'
            </script>
            ";
        }
    } else {
        $sql = mysqli_query($koneksi, "UPDATE kelas SET nama_kelas = '$nama_kelas',kompetensi_keahlian = '$kompetensi_keahlian' WHERE id_kelas = $_POST[id]");
        if ($sql) {
            echo "
            <script>
            alert('data berhasil diedit');
            location.href='?page=kelas'
            </script>
            ";
        } else {
            echo "
            <script>
            alert('data gagal diedit');
            location.href='?page=kelas'
            </script>
            ";
        }
    }
}else{
    $sql = mysqli_query($koneksi,"DELETE FROM kelas WHERE id_kelas=$_GET[hapus]");
    if ($sql) {
        echo "
            <script>
            alert('data berhasil dihapus');
            location.href='?page=kelas'
            </script>
            ";
    } else {
        echo "
            <script>
            alert('data gagal dihapus');
            location.href='?page=kelas'
            </script>
            ";
    }
}

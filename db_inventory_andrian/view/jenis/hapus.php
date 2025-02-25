<?php 

$id_jenis = $_GET['id_jenis'];
include '../../config/koneksi.php';
$query = mysqli_query($conn, "DELETE FROM jenis where id_jenis='$id_jenis'");


if ($query) {
    echo "<script>alert('Data Berhasil di Simpan')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data Gagal di Simpan')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
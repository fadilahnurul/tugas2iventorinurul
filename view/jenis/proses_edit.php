<?php
include '../../config/koneksi.php';

$id_jenis = $_POST['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,"UPDATE jenis SET
nama_jenis+='$nama_jenis' WHERE id_jenis='$id_jenis'");

if ($query){
    echo "<script>alter('Data berhasil di edit')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alter('Data gagal di edit') </script>";
    echo "<script>window.location.href='form_tambah.php'</script>";
}
?>
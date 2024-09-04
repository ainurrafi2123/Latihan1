<?php
if ($_POST) {
    $nama_pegawai = $_POST['nama_pegawai'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $telp = $_POST['telp'];
    $jabatan = $_POST['jabatan'];
    // $id_pegawai = $_POST['id_pegawai'];

    // Validasi input
    if (empty($nama_pegawai)) {
        echo "<script>alert('Nama pegawai tidak boleh kosong');location.href='register_pegawai.php';</script>";
    } elseif (empty($nik)) {
        echo "<script>alert('NIK tidak boleh kosong');location.href='register_pegawai.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('Alamat tidak boleh kosong');location.href='register_pegawai.php';</script>";
    } elseif (empty($gender)) {
        echo "<script>alert('Gender tidak boleh kosong');location.href='register_pegawai.php';</script>";
    } elseif (empty($telp)) {
        echo "<script>alert('Nomor telepon tidak boleh kosong');location.href='register_pegawai.php';</script>";
    } elseif (empty($jabatan)) {
        echo "<script>alert('Jabatan tidak boleh kosong');location.href='register_pegawai.php';</script>";
    // } elseif (empty($id_pegawai)) {
    //     echo "<script>alert('ID kelas tidak boleh kosong');location.href='register_pegawai.php';</script>";
    } else {
        include "koneksi.php";

        // Perbaiki nama tabel dan kolom sesuai dengan yang Anda miliki di database
        $insert = mysqli_query($conn, "INSERT INTO pegawai (nama_pegawai, nik, alamat, gender, telp, jabatan) VALUES ('$nama_pegawai', '$nik', '$alamat', '$gender', '$telp', '$jabatan')") or die(mysqli_error($conn));

        if ($insert) {
            echo "<script>alert('Sukses menambahkan pegawai');location.href='register_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='register_pegawai.php';</script>";
        }
    }
}
?>

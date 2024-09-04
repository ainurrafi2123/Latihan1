<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tampil Pegawai</title>
</head>
<body>
  <div class="container pt-5">
    <h3>Tampil Pegawai</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA PEGAWAI</th>
                <th>NIK</th>
                <th>ALAMAT</th>
                <th>GENDER</th>
                <th>TELP</th>
                <th>JABATAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        include "koneksi.php";
        $qry_pegawai = mysqli_query($conn, "SELECT * FROM pegawai");
        $no = 0;
        while ($dt_pegawai = mysqli_fetch_array($qry_pegawai)) {
            $no++;
        ?>
        <tr>              
          <td><?= $no ?></td>
          <td><?= $dt_pegawai['nama_pegawai'] ?></td> 
          <td><?= $dt_pegawai['nik'] ?></td> 
          <td><?= $dt_pegawai['alamat'] ?></td>
          <td><?= $dt_pegawai['gender'] ?></td> 
          <td><?= $dt_pegawai['telp'] ?></td> 
          <td><?= $dt_pegawai['jabatan'] ?></td> 
          <td>
            <a href="ubah_pegawai.php?id_pegawai=<?= $dt_pegawai['id_pegawai'] ?>" class="btn btn-success">Ubah</a> | 
            <a href="hapus_pegawai.php?id_pegawai=<?= $dt_pegawai['id_pegawai'] ?>"
              onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        <?php 
        }
        ?>
        </tbody>
    </table>
    <a href="tambah_pegawai.php" class="btn btn-primary">Tambah Pegawai</a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

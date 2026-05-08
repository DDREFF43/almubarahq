<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISFO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="icon" type="icon/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRoXLK6JGApMbt8V5zDcxlwSFsDtYN5FQpZA&s">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
   
    <!-- TAMBAH DATA -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <div class="container">
  <div class="alert alert-primary mb-2 mt-3" role="alert">
    <h2>Hiiii, Al rafa Selamat Datang Di TIFO</h2>
  </div>
  <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i>&nbspTambah Data</button>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $no = 0;
            $data = mysqli_query($con, "SELECT * FROM tb2_siswa");
            while($siswa = mysqli_fetch_array($data)){
                $no++;
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $siswa['NIS'] ?></td>
                <td><?= $siswa['nama'] ?></td>
                <td><?= $siswa['jenis_kelamin'] ?></td>
                <td><?= $siswa['kelas'] ?></td> 
                <td><?= $siswa['alamat'] ?></td>
                <td>
                    <?php
                    if($siswa['status'] ==1){
                        ?>
                        <span class='badge bg-success'>Aktif</span>
                        <?php }else{ ?>
                        <span class='badge bg-danger'>Tidak Aktif</span>
                        <?php } ?>
                </td>
                <td>
                    <button class="btn btn-primary">update</button>
                    <a href="tampil_data.php?del=hapus$id=<?= $siswa['id_siswa'] ?>">
                    <button class="btn btn-danger">delete</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    <script>
        alert("Selamat Datang Di SISFO, Semoga Harimu Menyenangkan");
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
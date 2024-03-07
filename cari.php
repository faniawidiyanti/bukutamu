<?php
include "koneksi.php"
?>

<table class="table">
  <thead class="table-info">
  <body  style="background-image:url('1.jpg'); width:100%; height:500px;"> 
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis_Kelamin</th>
        <th>Alamat</th>
        <th>No_Telepon</th>
        <th>Kepentingan</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php 
include "koneksi.php";
include "boot.php";
$cari=$_POST['cari'];
$tampil=$koneksi->query("select * from biodata where nama like '%$cari%'");
while($t=$tampil ->fetch_array()){
			@$no++;
      ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $t['nama'] ?></td>
            <td><?php echo $t['jenis_kelamin'] ?></td>
            <td><?php echo $t['alamat'] ?></td>
            <td><?php echo $t['no_telepon'] ?></td>
            <td><?php echo $t['kepentingan'] ?></td>
            <td><?php echo $t['tanggal'] ?></td>
            <td><a href="hapus.php?id=<?php echo $t['no'] ?>"><button class="btn bg-danger text-light"><i class="bi bi-trash"></i></button></a>
            <a href="edit.php?id=<?php echo $t['no'] ?>"><button class="btn bg-warning text-light"><i class="bi bi-pencil-fill"></i></td>
        </tr>
        <?php
    }

    ?>

  </tbody>
</table>
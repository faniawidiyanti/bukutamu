<?php
include "koneksi.php";
include "boot.php";
$id=$_GET['id'];

$tampil=$koneksi->query("select * from biodata where no='$id'");

$a=$tampil -> fetch_array();

?>

<div class="container mt-2"> 
        <div class="row">
            <div class="col col-4">
            <body  style="background-image:url('1.jpg'); width:100%; height:500px;"> 


            
    <form action=""method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?php echo $a['nama'] ?> ">
    </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" id="exampleInputPassword1 "name="jenis_kelamin"  value="<?php echo $a['jenis_kelamin'] ?> ">
  </div>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="exampleInputPassword1 "name="alamat"  value="<?php echo $a['alamat'] ?> ">
  </div>

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No Telpon</label>
    <input type="text" class="form-control" id="exampleInputPassword1 "name="no_telepon"  value="<?php echo $a['no_telepon'] ?> ">
  </div>

 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Kepentingan</label>
    <input type="text" class="form-control" id="exampleInputPassword1 "name="kepentingan"  value="<?php echo $a['kepentingan'] ?> ">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="exampleInputPassword1 "name="tanggal"  value="<?php echo $a['tanggal'] ?> ">
  </div>

  <button type="submit" class="btn btn-success" name="edit">Simpan</button>
</form>
</div>
</div>
</div>

<?php
if( isset ($_POST['edit'])) {
  
  

$edit= $koneksi-> query("update biodata set nama='$_POST[nama]',alamat='$_POST[alamat]',jenis_kelamin='$_POST[jenis_kelamin]',no_telepon='$_POST[no_telepon]',kepentingan='$_POST[kepentingan]',tanggal='$_POST[tanggal]' where no ='$id'");

?>
<script>
  document.location.href='rumah.php';
</script>
<?php
}
?>

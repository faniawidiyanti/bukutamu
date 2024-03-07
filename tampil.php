<?php
include "boot.php";

?>

<body>
    <!-- bagian form  -->
    <div class="container mt-2">
        <div class="row">
            <div class="col col-5">
          
  <form action="input.php" method="post">
    <h3>FORM INPUT</h3>
    <body  style="background-image:url('1.jpg'); width:100%; height:500px;"> 
  <div class="mb-3">
    <label for="validationServer" class="form-label">Nama</label>
    <input type="text" class="form-control" id="validationServer" name="nama" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
    <div class="valid-feedback">
  </div>
  </div>
  <div class="mb-3">
    <label for="validationServer" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" id="validationServer" name="jenis_kelamin" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"  required>
    <div class="valid-feedback">
  </div>
  </div>
  <div class="mb-3">
    <label for="validationTooltip" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="validationTooltip" name="alamat" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"  required>
    <div class="valid-feedback">
  </div>
  </div>
  <div class="mb-3">
    <label for="validationTooltip" class="form-label">No Telepon</label>
    <input type="number" class="form-control" id="validationTooltip" name="no_telepon"aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"  required>
    <div class="valid-feedback">
  </div>
  </div>
  <div class="mb-3">
    <label for="validationTooltip" class="form-label">Kepentingan</label>
    <input type="text" class="form-control" id="validationTooltip" name="kepentingan" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"  required>
    <div class="valid-feedback">
  </div>
  </div>
  <div class="mb-3">
    <label for="validationTooltip" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="validationTooltip" name="tanggal" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"  required>
    <div class="valid-feedback">
  </div>
  </div>

  
  <button type="submit" class="btn btn-success">Simpan</button>
</form>
</div>
</div>
<!-- tutup form  -->
<!-- ini bagian tampil  -->
<br>
<!-- tutup tampil -->
  </body>

  

   
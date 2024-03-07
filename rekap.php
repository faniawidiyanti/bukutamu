<?php
include "boot.php";

?>
<body  style="background-image:url('1.jpg'); width:100%; height:500px;"> 
<form action=""method="get">
<div class="input-group">
  <input type="date" aria-label="First name" name="awal" class="form-control">
  <input type="date" aria-label="Last name" name="akhir" class="form-control">
  <span class="input-group-text"><button type="submit"><i class="bi bi-search"></i></button></span>
  <button class="btn" onclick="printDiv('print')" type="submit"><i class="bi bi-printer"></i></button>
</div>
</form>

<fieldset id="print"> 
  <table class="table class text-center bg-warning-emphasis mt-2 mt-2">
    <thead>
    <tr>
        <th scope="col">no</th>
        <th scope="col">nama</th>
        <th scope="col">jenis kelamin</th>
        <th scope="col">alamat</th>
        <th scope="col">no telpon</th>
        <th scope="col">kepentingan</th>
        <th scope="col">tanggal</th>

    </tr>
    </thead>
    <?php include "koneksi.php";
    @$cari=$_GET['awal'];
    if($cari==""){
      $tampil=$koneksi->query("select * from biodata");
      while ($a=$tampil->fetch_array()){
      @$no++;
      ?>
      <tbody class="table">
<tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $a['nama'] ?></td>
            <td><?php echo $a['jenis_kelamin'] ?></td>
            <td><?php echo $a['alamat'] ?></td>
            <td><?php echo $a['no_telepon'] ?></td>
            <td><?php echo $a['kepentingan'] ?></td>
            <td><?php echo $a['tanggal'] ?></td>
        <?php
    }
  }else{

    $tampil=$koneksi->query("select * from biodata where tanggal between'$_GET[awal]' and '$_GET[akhir]'");
    while ($a=$tampil->fetch_array()){
      @$no++;
      ?>
      <tbody class="table">
<tr>
<td><?php echo $no; ?></td>
            <td><?php echo $a['nama'] ?></td>
            <td><?php echo $a['jenis_kelamin'] ?></td>
            <td><?php echo $a['alamat'] ?></td>
            <td><?php echo $a['no_telepon'] ?></td>
            <td><?php echo $a['kepentingan'] ?></td>
            <td><?php echo $a['tanggal'] ?></td>

        <?php
    }
  }
    ?>
</tr>
  </table>
</fieldset>
<script type="text/javascript">
  function printDiv (el) {
    var a= document.body.innerHTML;
    var b= document.getElementById(el).innerHTML;

    document.body.innerHTML=b;
    window.print();
    dokument.body.innerHTML=a;
  }
</script>
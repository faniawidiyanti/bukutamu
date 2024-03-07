<?php
 include"boot.php";?>

<div class="container">
<body  style="background-image:url('cantik.jpg'); width:100%; height:500px;"> 
<nav class="navbar navbar-expand-lg bg-success ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand text-light" href="#">BUKU TAMU SEKOLAH</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="home.php" target="konten" class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <form action="cari.php" method="post" class="d-flex" role="search" target="konten">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
 <!-- ini bagian side-->
  <div class="col bg- mt-2">
  <ul class="list-group">
  <li class="list-group-item bg-success text-light" aria-current="true">WELCOME</li>

  <a href="tampil.php" target="konten"><li class="list-group-item">TAMBAH TAMU</li></a>
  <a href="rumah.php" target="konten"><li class="list-group-item">DATA TAMU</li></a>
  <a href="rekap.php" target="konten"><li class="list-group-item">REKAP</li></a>
  <a href="index.php"><li class="list-group-item">LOGOUT</li></a>

  
</ul>
  </div>
  <!-- tutup side 1 -->
  <div class="col bg- col-9 mt-2">
  <iframe src="" frameborder="0" name="konten" width="100%" height="500"></iframe>
  </div>
  <!-- tutup konten -->
</div>




</div>
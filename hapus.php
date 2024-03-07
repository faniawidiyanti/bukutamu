<?php
include "koneksi.php";
$id=$_GET['id'];
$delete=$koneksi->query("delete from biodata where no='$id'") ;

?> 
<script>
    document.location.href='rumah.php';
</script>

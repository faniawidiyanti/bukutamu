<?php
include "boot.php";
?>
<div olign="center">
<div class="container" style="margin-left:100px;">
<div class="card w-50">
  <div class="card-body" style="background-image:url(siapa.jpg); width: 900px; height:600px; background-size:cover;">

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="container col-4 me-5">
  <form action= "" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="container-login100-form-btn">
						<input type="submit" name="login" class="login100-form-btn" value="Login">
							
                        
					</div>
  
  <!-- <button type="submit" name="submit" class="btn btn-primary">Submit</button> -->
</form>

<?php
session_start(); 
    include "koneksi.php";
    
    
    if (isset($_POST['login'])) {
        $username=$_POST['username'];
        $password = $_POST['password'];

        $kueri  = "select * from aman where username='$username' and password='$password'";
        $aman   = $koneksi->query($kueri);
        $cek    = $aman->num_rows;

    if($cek > 0) {
          $_SESSION['username'] = $username;
    ?>
    <script type="text/javascript">

        document.location='navbar.php';
    </script>



    <?php
            
    }else{
        echo "gagal";
    }

}


?>

    
  </div>
</div>
</div>
</div>
</div>

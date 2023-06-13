<?php
    if(isset($_POST['submit'])){
        include 'connect.php';
        $username=$_POST['Username'];
        $password=$_POST['Password'];
        $sql="SELECT * FROM admin WHERE Username='$username'and Password='$password'";
        $result=$con->query($sql);
        $row=mysqli_fetch_array($result);
        $num=mysqli_num_rows($result);
        if($num==0){
            echo "<script>alert('Username หรือ Password ไม่ถูกต้อง')</script>";
        }
        else{
          session_start();
            	$_SESSION['username']=$row['username'];
            	$_SESSION['name']=$row['name'];
				header("location:Admin/Ad_Index.php");
        }
    }
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="Style.css">

<nav class="navbar navbar-expand-lg bg-Danger">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="index.php">Mae Ploysai</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="Menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="About.php">About</a>
        </li>
      </ul>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#exampleModal">Login Now</button>
    <!-- End Button trigger modal -->      
</div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="conntainer justify-content-center">
        <center><br><svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg><br><br><br></center>
          <!-- Login from -->
          <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
      <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">Username</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="Username" aria-describedby="addon-wrapping">
</div>
<br>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">Password</span>
  <input type="text" class="form-control" placeholder="Password" aria-label="Password" name="Password" aria-describedby="addon-wrapping">
</div>
<!--End Login from -->
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal -->
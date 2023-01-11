<?php 
    include 'config.php';
    $id=$_GET['updateid'];
    $mysql="SELECT * FROM crud WHERE id=$id";
    $hasil=mysqli_query($conn, $mysql);
    $row=mysqli_fetch_assoc($hasil);
    $nama=$row['nama'];
    $email=$row['email'];
    $jk=$row['jk'];
    $jabatan=$row['jabatan'];
    if(isset($_POST['submit'])){
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $jk=$_POST['jk'];
        $jabatan=$_POST['jabatan'];

        $mysql="UPDATE crud SET id='$id', nama='$nama', email='$email', jk='$jk', jabatan='$jabatan' where id=$id";
        $hasil=mysqli_query($conn, $mysql);
        if($hasil){
            // echo "Berhasil mengupdate data!";
            header('location:pegawai.php');
        } else{
            die(mysqli_error($conn));
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
  <body style="background-color: #ff0000">
  <nav class="navbar navbar-expand-lg shadow py-1 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://www.peaconsulting.co.uk/wp-content/uploads/2018/04/walls-web.jpg" alt="" class="logo-medium">
                Wall's
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="welcome.php">produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pegawai.php">Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>

                </ul>
                <div class="social-links">
                            <a href="#link"i class="ri-facebook-circle-fill"></i></a>
                            <a href="#link"><i class="ri-instagram-fill"></i></a>
                            <a href="#link"><i class="ri-youtube-fill"></i></a>
                            <a href="#link"><i class="ri-twitter-fill"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <form class="mt-5" method="post">
            <div class="mb-3">
                <label class="mb-3">Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="nama" autocomplete="off" value=<?php echo $nama; ?>>
            </div>
            <div class="mb-3">
                <label class="mb-3">Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off" value=<?php echo $email; ?>>
            </div>
            <div class="mb-3">
                <label class="mb-3">Jenis Kelamin</label>
                <input type="text" class="form-control" placeholder="Enter Your Jenis Kelamin" name="jk" autocomplete="off" value=<?php echo $jk; ?>>
            </div>
            <div class="mb-3">
                <label class="mb-3">Jabatan</label>
                <input type="text" class="form-control" placeholder="Enter Your Jabatan" name="jabatan" autocomplete="off" value=<?php echo $jabatan; ?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" style="background-color: #7D160Dff ">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
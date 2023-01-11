<?php 

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees - Wall’s</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
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
        <button type="submit" class="btn btn-primary my-5" style="background-color: #7D160Dff "><a href="pegawai_tambah.php" class="text-light" style="text-decoration: none;">Add Employee</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Pilihan</th>
                </tr>
            </thead>
            <tbody>

            <?php 
            $mysql = "SELECT * FROM crud";
            $hasil=mysqli_query($conn, $mysql);
            if($hasil){
                while($row=mysqli_fetch_assoc($hasil)){
                    $id=$row['id'];
                    $nama=$row['nama'];
                    $email=$row['email'];
                    $jk=$row['jk'];
                    $jabatan=$row['jabatan'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$nama.'</td>
                    <td>'.$email.'</td>
                    <td>'.$jk.'</td>
                    <td>'.$jabatan.'</td>
                    <td>
                        <button type="button" class="btn btn-primary" style="background-color: #9D512Dff "><a href="pegawai_edit.php?updateid='.$id.'" class="text-light" style="text-decoration: none;">Update</a></button>
                        <button type="button" class="btn btn-danger" style="background-color: #3D251Fff"><a href="pegawai_hapus.php?deleteid='.$id.'" class="text-light" style="text-decoration: none;">Delete</a></button>
                    </td>
                  </tr>';
                }
            }
            ?>
            </tbody> 
        </table>
    </div>
</body>
</html>
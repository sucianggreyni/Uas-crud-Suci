<?php 

include 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $mysql="DELETE FROM crud WHERE id=$id";
    $hasil=mysqli_query($conn, $mysql);
    if($hasil){
        header('location:pegawai.php');
    } else{
        die(mysqli_error($conn));
    }
}
?>
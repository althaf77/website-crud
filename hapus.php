<?php 

include("konek.php");

if(isset($_GET['id'])){

    $id=$_GET['id'];

    $sql= "DELETE FROM tabel_member WHERE id=$id";
    $query=mysqli_query($db, $sql);

    if($query){
        header('Location: admin.php');
        echo "<script> alert ('data berhasil dihapus'); </script>";
    }else{
        die("data tidak ada");
    }
}else{
    ("akses ditolak");
}

?>
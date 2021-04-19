<?php 
include('konek.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="sidebar">
    <div class="responsive-nav">
        <div class="menu">
        <center>
        <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
        <p>Welcome</p>
        <p>Admin</p>
    </div>
        </center><br>
  <a href="#home">Dashboard</a>
  <a class="active"  href="#news">Daftar-Member</a>
  <a href="#contact">Contact</a>
  <a href="halmut.php">Kembali Ke utama</a>
  <br>

  <div class="ikon">
    <ul class="soial-icons">
      <li>
        <a href="https://fb.com/templatemo"
          ><i class="fa fa-facebook"></i
        ></a>
      </li>
      <li>
        <a href="#"><i class="fa fa-twitter"></i></a>
      </li>
      <li>
        <a href="#"><i class="fa fa-linkedin"></i></a>
      </li>
      <li>
        <a href="#"><i class="fa fa-dribbble"></i></a>
      </li>
      <li>
        <a href="#"><i class="fa fa-rss"></i></a>
      </li>
    </ul>
  </div>
  <center><div class="teks-copyright">
    <p>ALT.GYM.com</p>
  </div></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<div class="content">
    <section id="home">

   <div class="container">
   <center>Daftar member</center>
    <div class="row justify-content-center mt-5">
    <nav>
    <a href="form.php">Tambah Member Baru [ + ]</a>
    </nav>
    <br>

    <div class="table-responsive">
        <table id="table-datables" class="table" border="1">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Pembayaran</th>
                    <th>Paket</th>
                    <th>Jangka</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql= "SELECT * FROM tabel_member";
            $query= mysqli_query($db, $sql);
            $no=1;

            while($member= mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$no++. "</td>";
                echo "<td>".$member['nama']."</td>";
                echo "<td>".$member['email']."</td>";
                echo "<td>".$member['jk']."</td>";
                echo "<td>".$member['bayar']."</td>";
                echo "<td>".$member['paket']."</td>";
                echo "<td>".$member['jangka']."</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=".$member['id']."'>edit</a> | ";
                echo "<a href='hapus.php?id=".$member['id']."'>hapus</a> | ";
                echo "</td>";
                echo "</tr>";

            }
            ?>

            </tbody>
        </table>
    
    
    </div>
            <p>Total : <?php echo mysqli_num_rows($query) ?></p>
    </div>
    

   </div>
</section>
</div>
</body>
</html>

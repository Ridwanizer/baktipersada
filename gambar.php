<?php

	include 'koneksi.php';
	 $sql = "select * from galeri_perusahaan order by Id_foto desc";
        $querySql = mysqli_query($conn,$sql);
        if ($querySql == true) {
           $fetchData = mysqli_fetch_assoc($querySql);
           while ($rows = $fetchData) {
           	echo'<div>'.$rows['gambar'].'</div>';
           }
       }
 ?>
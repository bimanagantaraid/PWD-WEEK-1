<?php 

//ambil lokasi file diambil diupload
$lokasifile = $_FILES["fileupload"]["tmp_name"];
//ambil nama file dari file yang diupload
$nama_file = $_FILES["fileupload"]["name"];
//ambil data dari deskripsi
$deskripsi = $_POST["deskripsi"];

//set direktori untuk menyimpan file yang diupload beserta dengan nama file pada akhir baris
$direktori = "G:/APP/XAMPP/htdocs/PRAKTIKUM/PWD/WEEK 1/$nama_file";

// cek jika data berhasil dipindah dengan pengecekan fungsi move_upload_file dengan parameter lokasifile asal kelokasi file tujuan, jika file berhasil diupload/pindah maka munculkan pesan nama file dan deskripsi
if(move_uploaded_file($lokasifile, $direktori))
{
    echo "Nama File : <b>$nama_file</b>";
    echo "Deskripsi File : $deskripsi";
}else{
    echo "File Gagal Upload";
}

?>
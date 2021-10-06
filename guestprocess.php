<?php 

echo 
'<head>
    <title>My Guest Book</title>
</head>';
// ambil data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$status = $_POST['status'];
$komentar = $_POST['komentar'];
// membuka file bernama guestbook.txt dengan mode a+ (membuka file dan mencari dari akhir isi file)
$fp = fopen("guestbook.txt", "a+");
// memasukan data kedalam file txt
fputs($fp, "$nama|$alamat|$email|$status|$komentar\n");
// menutup semua fungsi open file
fclose($fp);

echo 'Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu <br>';
echo '<a href="guest.html">Isi Buku Tamu</a><br>';
echo '<a href="listguest.php">Lihat Buku Tamu</a><br>';
?>
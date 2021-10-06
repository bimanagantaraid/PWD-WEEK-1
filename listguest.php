<?php 

echo 
'<head>
    <title>List Guest Book</title>
</head>';

// membuka file guestbook.txt dengan mode r (baca)
$fp = fopen("guestbook.txt", "r");
echo '<div style="display:flex; justify-content:center;">';
echo '<div>';
echo '<table border="1"';
// melakukan looping untuk mencetak data dari file kedalam tabel
while ($guest = fgets($fp, 80)){
    //melakukan explode terlebih dahulu pada karakter pemisah data "|"
    $pisah = explode("|", $guest);
    echo '<tr><td>nama</td><td>'.$pisah[0].'</td></tr>';
    echo '<tr><td>Alamat</td><td>'.$pisah[1].'</td></tr>';
    echo '<tr><td>Email</td><td>'.$pisah[2].'</td></tr>';
    echo '<tr><td>Status</td><td>'.$pisah[3].'</td></tr>';
    echo '<tr><td>Komentar</td><td>'.$pisah[4].'</td></tr>';
}
echo '</table>';
echo '</div>';
echo '<div>';
echo '<a href="guest.php">Guest Book</a>';
echo '</div>';
echo '</div>';
?>
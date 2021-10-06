<?php 

//set name file pada variabel $filecounter
$filecounter = "counter.txt";
//membuka file dengan mode r+ artinya membuka/membaca dan menulis pada file
$fl = fopen($filecounter, "r+");
//mamasukan isi dari file kedalam variabel $hit
$hit = fread($fl, filesize($filecounter));

//membuat tabel untuk menampilkan isi dari file
echo '<table>
    <tr>
        <td>Anda pengunjung yang ke : '.$hit.
        '</td>
    </tr>
</table>';

fclose($fl);

//membuka file dengan nama file yang sudah diset divariabel $filecounter dan params/mode r+ artinya membaca file dan menulis file
$fl = fopen($filecounter, "r+");
//melakukan increment pada variable $hit
$hit = $hit+1;
//menulis isi file dengan value baru dari variabel $hit
fwrite($fl, $hit, strlen($hit));
//menutup file yang sudah tidak diproses
fclose($fl);

?>
<?php 

//melakukan set direktori dimana file disimpan
$myDirektori = "G:/APP/XAMPP/htdocs/PRAKTIKUM/PWD/WEEK 1/";
//membuka direktori dengan fungsi opendir
$dir = opendir($myDirektori);
echo "Isi Folder (Klik link untuk Download : <br>";
//melakukan looping pada direktori  dan mencetak kedalam tag a dan menlakukan setting href dengan url direktori file
while($tmp = readdir($dir)){
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}
//menutup fungsi open direktori pada variabel $dir
closedir($dir);

?>

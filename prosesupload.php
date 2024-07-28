<?php

// ambil data file
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "File/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='$dirUpload$namaFile' target='_blank'>$namaFile</a>";
} else {
    echo "Upload Gagal!";
}
echo "<br><br><br>";
echo "<a href='upload.html'>Kembali</a>";
?>

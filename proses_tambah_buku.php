<?php
    $nama_buku = $_POST ["nama_buku"];
    $pengarang = $_POST ["pengarang"];
    $deskripsi = $_POST ["deskripsi"];
    $foto = $_POST ["foto"];

    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO buku (nama_buku, pengarang, deskripsi, foto) VALUES ('{$nama_buku}','{$pengarang}','{$deskripsi}','{$foto}')");
    
    if($input){
        echo "<script>alert('Berhasil');location.href='tambah_buku.php';</script>";
    }
    else{
        echo "<script>alert('Gagal');location.href='tambah_buku.php';</script>";
    }
?>
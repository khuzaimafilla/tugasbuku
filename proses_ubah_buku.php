<?php
if ($_POST) {
    $nama_buku = $_POST ["nama_buku"];
    $pengarang = $_POST ["pengarang"];
    $id_buku = $_POST ["id_buku"];
    $deskripsi = $_POST ["deskripsi"];
    $foto = $_POST ["foto"];
    $koneksi = "koneksi.php";
    if (empty($nama_buku)) {
        echo "<script>alert('nama buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    }
    elseif (empty($pengarang)) {
        echo "<script>alert('pengarang tidak boleh kosong');location.href='tambah_buku.php';</script>";
    }
            else {
                $update=mysqli_query($koneksi,"update buku set nama_buku='".$nama_buku."', pengarang='".$pengarang."', deskripsi='".$deskripsi."', foto='".$foto."'") or die(mysqli_error($koneksi));
                if ($update) {
                    echo "<script>alert('Sukses update buku');location.href='tampil_buku.php';</script>";
                }
                else {
                    echo "<script>alert('Gagal update buku');location.href='ubah_buku.php?id_buku=".$id_buku."';</script>";
                }
            }
        }
?>
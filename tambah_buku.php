<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Tambah Buku</h1>
        <form method="POST" action="proses_tambah_buku.php">
        <div class="mb-3">
            <label for="nama_buku" class="form-label">Nama Buku</label>
            <input type="text" class="form-control" name="nama_buku" placeholder="Masukkan Nama Buku" required>
        </div>
        <div class="mb-3">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" class="form-control" name="pengarang" placeholder="Masukkan Nama Pengarang" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" class="form-control" name="foto" placeholder="Upload Foto" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
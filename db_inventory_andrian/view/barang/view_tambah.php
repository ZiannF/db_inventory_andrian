<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Halaman Tambah Barang</h1>
    <br>
    <form action="proses_tambah.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_barang">
     </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="nama_barang">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Jenis</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_jenis">
     </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="harga">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stok</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok">
     </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
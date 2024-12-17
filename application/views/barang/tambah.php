<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
</head>

<body>
  <div class="container">
    <h3>Tambah Barang</h3>
    <div class="card-body">
      <?= form_open('menu/tambah_barang') ?>
      <div>
        <label for="">Kode Barang</label>
        <input type="text" name="kode_brg" required>
      </div>
      <div>
        <label for="">Nama Barang</label>
        <input type="text" name="nama_brg" required>
      </div>
      <div>
        <label for="">Harga Beli</label>
        <input type="number" name="harga_beli" required>
      </div>
      <div>
        <label for="">Harga Jual</label>
        <input type="number" name="harga_jual" required>
      </div>
      <div>
        <label for="">satuan Barang</label>
        <input type="text" name="satuan_brg" required>
      </div>
      <div>
        <label for="">Stock Barang</label>
        <input type="number" name="stock_brg" required>
      </div>
      <div>
        <button type="submit">Save</button>
        <a href="<?= site_url("menu/barang") ?>">Cancel</a>
      </div>
      <?= form_close() ?>
    </div>
  </div>

</body>

</html>
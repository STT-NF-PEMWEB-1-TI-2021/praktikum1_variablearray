<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<table border="1" align="right">
  <tr style="background-clor:blue:">
    <td>Daftar Harga</td>
  </tr>
  <tr>
    <td>TV : 4.200.000</td>
  </tr>
  <tr>
    <td>Kulkas : 3.100.000</td>
  </tr>
  <tr>
    <td>MESIN CUCI : 3.800.000</td>
  </tr>
  <tr style="bakcground-color:blue:">
    <td>Harga Dapat Berubah Setiap Saat</td>
  </tr>
</table>

<form method ="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="pembeli" class="col-4 col-form-label">Costumer</label> 
    <div class="col-8">
      <input id="pembeli" name="pembeli" placeholder="Nama costumer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="barang" id="barang_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="barang_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="barang" id="barang_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="barang_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="barang" id="barang_2" type="radio" class="custom-control-input" value="mesincuci"> 
        <label for="barang_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jmlh" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jmlh" name="jmlh" placeholder="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="Proses" type="submit" value="Simpan">Submit</button>
    </div>
  </div>
</form>

</br>

<h1>Ini Hasilnya</h1>

<?php
$proses = $_POST['Proses'];
$costumer = $_POST['pembeli'];
$produk = $_POST['barang'];
$jumlah = $_POST['jmlh'];

if($produk == "tv"){
  $total = $produk * 4200000;
}elseif($produk == "kulkas"){
  $total = $produk * 3100000;
}elseif($produk == "mesincuci"){
  $total = $produk * 3800000;
}

echo "nama costumer : $costumer";
echo "</br>nama produk : $produk";
echo "</br>jumlah produk : $jumlah";
echo "</br>total barang : $total";
?>

</body>
</html>
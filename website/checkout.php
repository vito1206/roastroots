<?php 
include "../koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RoastRoots - Pemesanan</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../image/logo.png">
</head>
<?php include "../layout/header.html" ?>

<form action="identity.html" method="post">
  <main>
    <section class="order-form">
      <div class="container">
        <h2>Pesan Biji Kopi</h2>
        <form>
          <div class="product-list">
            <h3>Pilih Produk:</h3>
            <div class="product">
              <img src="../image/Arabika Malang.JPG" alt="Produk 1">
              <div class="product-info">
                <h4>Arabika Malang</h4>
                <?php
                $ambildata = mysqli_query($conn, "SELECT * FROM produk");
                while($tampil = mysqli_fetch_array($ambildata)){
                  echo"
                  <p>Stock : $tampil[stock]</p
                  ";
                }
                ?>
                <p>Harga : Rp 213.000/ kg</p>
                <div class="product-order">
                  <label for="quantity-1">Kuantitas (kg):</label>
                  <input type="number" id="quantity-1" name="quantity-1" min="0" value="0">
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn" name="submit">Pesan Sekarang</button>
        </form>
      </div>
    </section>
  </main>
</form>
<?php include "../layout/footer.html" ?>

</body>
</html>
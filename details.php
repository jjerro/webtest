 <?php
              // Get the product ID
  $productId = isset($_GET['id']) && intval($_GET['id']) > 0 ? intval($_GET['id']) : 0;

  if ($productId > 0) {
    // require the admins class which containes most functions applied to admins
    require_once "controller/admin-class.php";

    $admins   = new Admins($dbh);
    $productDetails = $admins->getAProduct($productId);
  }
            ?>

            <?php if (isset($productDetails) && sizeof($productDetails) > 0) : $product = $productDetails[0]; ?>
          <!-- We will use a simple table to display the product -->
          
          <hr>  
          <div id="divToPrint" class="underline">
          <div class="header hidden-xs hidden-sm hidden-lg hidden-md"><img src="img/header-print.png" width="1200" height="200"></div>
          
          <div class=" col-sm-6 ">
          <div id="labeling">
          <label>Detail Barang</label>
          </div>
          <div>
            <label id="judul-benda">Nama Benda</label>
            <div id="judul-benda"><?= htmlentities(strip_tags($product->nama_benda)) ?></div>
          </div>
          <div>
            <label>Jenis Koleksi</label>
            <div><p><?= htmlentities(strip_tags($product->jenis_koleksi)) ?></p></div>
          </div>
          <div>
            <label>No Inventaris Lama</label>
            <div><p><?= htmlentities(strip_tags($product->no_lama)) ?></p></div>
          </div>
          <div>
            <label>No Inventaris Baru</label>
            <div><p><?= htmlentities(strip_tags($product->no_baru)) ?></p></div>
          </div>
          <div>
            <label>No Foto</label>
            <div><p><?= htmlentities(strip_tags($product->no_foto)) ?></p></div>
          </div>
          <div>
            <label>Tempat Penyimpanan di Komputer</label>
            <div><p><?= htmlentities(strip_tags($product->tempat_simpan)) ?></p></div>
          </div>          
          <div id="labeling">
          <label>Tempat Penyimpanan Fisik</label>
          </div>
          <div>
            <label>Gedung</label>
            <div><p><?= htmlentities(strip_tags($product->gedung)) ?></p></div>
          </div> 
          <div>
            <label>Ruangan</label>
            <div><p><?= htmlentities(strip_tags($product->ruangan)) ?></p></div>
          </div>
          <div>
            <label>Rak</label>
            <div><p><?= htmlentities(strip_tags($product->rak)) ?></p></div>
          </div>
          <div>
            <label>Box</label>
            <div><p><?= htmlentities(strip_tags($product->idbox)) ?></p></div>
          </div>
          <div>
            <label>Lemari</label>
            <div><p><?= htmlentities(strip_tags($product->lemari)) ?></p></div>
          </div>
          </div>
          <div class="col-sm-6">
          <div id="labeling">
          <label>Ukuran Benda Koleksi</label>
          </div>
          <div>
            <label>Panjang</label>
            <div><p><?= htmlentities(strip_tags($product->panjang)) ?></p></div>
          </div>
          <div>
            <label>Lebar</label>
            <div><p><?= htmlentities(strip_tags($product->lebar)) ?></p></div>
          </div>
          <div>
            <label>Tinggi</label>
            <div><p><?= htmlentities(strip_tags($product->tinggi)) ?></p></div>
          </div>
          <div>
            <label>Tebal</label>
            <div><p><?= htmlentities(strip_tags($product->tebal)) ?></p></div>
          </div>
          <div>
            <label>Panjang Rumbai</label>
            <div><p><?= htmlentities(strip_tags($product->rumbai)) ?></p></div>
          </div>
          <div>
            <label>Diameter Dalam</label>
            <div><p><?= htmlentities(strip_tags($product->diameter_dalam)) ?></p></div>
          </div>
          <div>
            <label>Diameter Luar</label>
            <div><p><?= htmlentities(strip_tags($product->diameter_luar)) ?></p></div>
          </div>
          <div id="labeling">
          <label>Keterangan Lain</label>
          </div>
          <div>
            <label>Bahan Pembuatan</label>
            <div><p><?= htmlentities(strip_tags($product->bahan)) ?></p></div>
          </div>
          <div>
            <label>Teknik Pembuatan</label>
            <div><p><?= htmlentities(strip_tags($product->teknik)) ?></p></div>
          </div>
          <div>
            <label>Fungsi & Kegunaan</label>
            <div><p><?= htmlentities(strip_tags($product->fungsi)) ?></p></div>
          </div>
          <div>
            <label>Riwayat/Sejarah Koleksi</label>
            <div><p><?= htmlentities(strip_tags(nl2br($product->riwayat))) ?></p></div>
          </div>
          <div>
            <label>Kondisi</label>
            <div><p><?= htmlentities(strip_tags($product->kondisi)) ?></p></div>
          </div>
          <div>
            <label>Deskripsi Koleksi</label>
            <div><p><?= htmlentities(strip_tags(nl2br($product->deskripsi))) ?></p></div>
          </div>
          </div>

        <?php

#display image 
      echo '<img src="koleksi_images/'.htmlentities(strip_tags($product->image)).'" alt="Gambar Koleksi" class="avatar" width="250" height="250">';
        ?>
        <hr>
      </div>
        <br>
            <button type="button" class="btn btn-success"><a href="edit-collection.php?id=<?= $product->idcol ?>" class="btn-success">Edit</a></button>
            <button type="button" class="btn btn-success"><a href="delete-collection.php?id=<?= $product->idcol ?>" class="btn-success" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></button>

        <?php else: ?>
        <h3>No product is select.</h3>
        <?php endif ?>

<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=700, height=700');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
<button type="button" class="btn btn-primary" onclick="PrintDiv();"> Save / Print </button>
            <!-- Akhir dari isi Halaman-->
            </div>
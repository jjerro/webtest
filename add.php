<div class="container-flow">
                    <h3>Tambahkan Koleksi</h3>
                    <hr>
                    <p>Isi data Koleksi dibawah ini.</p>

                   
                    <!--send the form information to process-new-collection.php to handle it -->
                    <form action="process-new-collection.php" method="POST">

                        <div class="form-group" style="selection">
                            <label for="jenis">Jenis Koleksi</label>
                        <select name="jenis" id="jenis">
                            <option value="">Pilih salah satu Kategori</option>
                            <option value="Arkeologika">Arkeologika</option>
                            <option value="Biologika">Biologika</option>
                            <option value="Etnogafika">Etnografika</option>
                            <option value="Filologika">Filologika</option>
                            <option value="Geologika">Geologika</option>
                            <option value="Keramologika">Keramologika</option>
                            <option value="Numismatika/Heraldika">Numismatika/Heraldika</option>
                            <option value="Seni Rupa">Seni Rupa</option>
                            <option value="Teknologika">Teknologika</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Benda</label>
                            <input type="text" name="nama" id="nama">
                        </div>
                        <div>
                            <label for="nolama">No. Inventaris Lama</label>
                            <input type="text" name="nolama" id="nolama">
                        </div>
                        <div>
                            <label for="nobaru">No. Inventaris Baru</label>
                            <input type="text" name="nobaru" id="nobaru">
                        </div>
                        <div>
                            <label for="nofoto">No. Foto</label>
                            <input type="text" name="nofoto" id="nofoto">
                        </div>
                        <div>
                            <label for="tempatsimpan">Tempat Penyimpanan di Komputer</label>
                            <input type="text" name="tempatsimpan" id="tempatsimpan">
                        </div>
                        <hr><hr>
                        <div>
                            <p style="text-align:center; weight:bold;"> Tempat Penyimpanan Benda</p>
                        </div> <hr>
                        <div>
                            <label for="gedung">Gedung</label>
                            <input type="text" name="gedung" id="gedung">
                        </div>
                        <div>
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" id="ruangan">
                        </div>
                        <div>
                            <label for="rak">Rak</label>
                            <input type="text" name="rak" id="rak">
                        </div>
                        <div>
                            <label for="box">Box</label>
                            <input type="text" name="box" id="box">
                        </div>
                        <div>
                            <label for="lemari">Lemari</label>
                            <input type="text" name="lemari" id="lemari">
                        </div>
                        <hr><hr>
                        <div>
                            <label style="text-align:center; weight:bold;">Ukuran</label>
                        </div>
                        <hr>
                        <div>
                            <label for="panjang">Panjang</label>
                            <input type="text" name="panjang" id="panjang">
                        </div>
                        <div>
                            <label for="lebar">Lebar</label>
                            <input type="text" name="lebar" id="lebar">
                        </div>
                        <div>
                            <label for="tinggi">Tinggi</label>
                            <input type="text" name="tinggi" id="tinggi">
                        </div>
                        <div>
                            <label for="tebal">Tebal</label>
                            <input type="text" name="tebal" id="tebal">
                        </div>
                        <div>
                            <label for="rumbai">Panjang Rumbai</label>
                            <input type="text" name="rumbai" id="rumbai">
                        </div>
                        <div>
                            <label for="diameterdalam">Diameter Dalam</label>
                            <input type="text" name="diameterdalam" id="diameterdalam">
                        </div>
                        <div>
                            <label for="diameterluar">Diameter Luar</label>
                            <input type="text" name="diameterluar" id="diameterluar">
                        </div>
                        <hr><hr>
                        <div>
                            <label style="text-align:center; weight:bold;">Bahan & Teknik</label>
                        </div>
                        <hr>
                        <div>
                            <label for="bahan">Bahan</label>
                            <input type="text" name="bahan" id="bahan">
                        </div>
                        <div>
                            <label for="teknik">Teknik Pembuatan</label>
                            <input type="text" name="teknik" id="teknik">
                        </div>
                        <div>
                            <label for="fungsi">Fungsi & Kegunaan Benda</label>
                            <textarea rows="5" cols="50" name="fungsi" id="fungsi"></textarea>
                        </div>
                        <hr><hr>
                        <div>
                            <label for="riwayat">Riwayat Benda</label>
                            <textarea rows="5" cols="50" name="riwayat" id="riwayat"></textarea>
                        </div>
                        <div>
                            <label for="kondisi">Kondisi Benda</label>
                            <input type="text" name="kondisi" id="kondisi">
                        </div>
                        <div>
                            <label for="deskripsi">Deskripsi</label>
                            <textarea rows="5" cols="50" name="deskripsi" id="deskripsi"></textarea>
                        </div>
                        <div>
                            <label for="image">Upload Foto</label>
                            <input class="input-group" type="file" name="image" accept="image/*" />
                        </div>

                        <div class="activate">
                            <button type="submit" class="btn-1a">Simpan Koleksi</button>
                        </div>
                    </form>
                </div>
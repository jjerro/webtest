      <div class="row">
        <div class="col-sm-6">
        <div class="pull-left">
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Tambah Pengguna</button>
        </div>
        </div>
</div>
 <hr> 

      <div class="row">
        <div class="col-sm-12">
          <div class="records_content"></div>
        </div>
       
      </div>


      <!-- Bootstrap Modal - To Add New Record -->
<!-- Modal -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Tambah Pengguna Baru</h4>
</div>
<div class="modal-body">
 
<div class="form-group">
<label for="username">Nama Pengguna</label>
<input type="text" id="username" placeholder="Nama User Anda" class="form-control" />
</div>

<div class="form-group">
<label for="nama">Nama Lengkap</label>
<input type="text" id="nip" placeholder="Nama Lengkap Anda" class="form-control" />
</div>

<div class="form-group">
<label for="nip">NIP</label>
<input type="text" id="nip" placeholder="NIP Anda" class="form-control" />
</div>
 
<div class="form-group">
<label for="kontak">No. Kontak</label>
<input type="text" id="kontak" placeholder="No. Kontak Anda" class="form-control" />
</div>

<div class="form-group">
<label for="tentang">Tentang Anda</label>
<input type="text" id="tentang" placeholder="Deskripsi Singkat tentang Anda" class="form-control" />
</div>
 
<div class="form-group">
<label for="password">Password</label>
<input type="password" id="password" placeholder="Password Anda" class="form-control" />
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
<button type="button" class="btn btn-primary" onclick="addRecord()">Tambah Data</button>
</div>
</div>
</div>
</div>

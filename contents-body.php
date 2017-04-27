      <div class="row">
        <div class="col-sm-6">
        <div class="pull-left">
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Tambah Koleksi</button>
        </div>
        </div>
</div>
 <hr> 

      <div class="row">
        <div class="col-sm-12">
          <div class="well">
          <div class="record_content"></div>
          </div>
        </div>
       
      </div>


      <!-- Bootstrap Modal - To Add New Record -->
<!-- Modal -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Tambah Koleksi Baru</h4>
</div>
<div class="modal-body">
 
<div class="form-group">
<label for="first_name">First Name</label>
<input type="text" id="first_name" placeholder="First Name" class="form-control" />
</div>
 
<div class="form-group">
<label for="last_name">Last Name</label>
<input type="text" id="last_name" placeholder="Last Name" class="form-control" />
</div>
 
<div class="form-group">
<label for="email">Email Address</label>
<input type="text" id="email" placeholder="Email Address" class="form-control" />
</div>
 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
</div>
</div>
</div>
</div>
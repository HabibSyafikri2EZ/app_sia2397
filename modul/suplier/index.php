<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="nama_suplier" class="from-label">Nama suplier</label>
                <input type="text" class="form-label" name="nama_suplier">
            </div>
            <div class="mb-3 col-md-6">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>
        </row>
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="telp" class="form-label">Telp</label>
                <input type="text" class="form-control" name="telp">
            </div>
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
        </row>  
        <hr>
        <div class="row">
            <div class="col text-end">
              <button class="btn btn-secondery" type="reset">Reset</button>
              <button class="btn btn-primary" type="submit">Simpan</button>
            </div> 
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3>Data Suplier</h3>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Suplier</th>
                  <th>Alamat</th>
                  <th>Telp</th>
                  <th>Email</th>
                  <th><i class="bi bi-gear-fill"></i></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>1</td>
                  <td>PT.AICE</td>
                  <ts>Jl.ICE CREAM</td>
                  <td>08123456789</td>
                  <td>mentega12@gmail.com</td>
                  <td>
                    <a href="#editSuplier" class="text-decoration-none" data-bs-toggle="modal">
                        <i class="bi bi-pencil-square text-success"></i>
                    </a>
                    <a hret="" class="text-decoration-none">
                        <i class="bi bi-trash text-danger"></i>
                    </a>
                </td>
                <!-- modal -->
                <div class="modal fade" id="editSuplier" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModallabel">Edit Suplier</h5>
                            <button type="button" class="btn-close" data-bs-dismis="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <div class="mb-3">
                            <label class="form-label" for="nama_suplier">Nama suplier</labale>
                            <input type="text" claass="form-control" name="alamat" value="Jl.ICE CREAM">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="telp">Telp</label>
                            <input type="text" class="form-control" name="telp" value="08123456789">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" class="form-control" name="email" value="mentega12@gmail.com">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-secondary" data-bs-dismii="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </tr>
    <tr>2</td>
            <td>PT. JCO</td>
            <td>Jl. pangandran</td>
            <td>08123456789</td>
            <td>jco123@gmail.com</td>
            <td>
                <a href="#editSuplier" class="text-decoration-none" data-bs-toggle="modal">
                   <i class="bi bi-pencil-square text-success"></i>
                </a>
                <a href="" class="text-decoration-none">
                    <i class="bi bi-trash text-danger"></i>
                </a>
              </td>
            </tr>
          </tbody>
       </table>
     </div>
   </div>
</div>

            
<form action="modul/supllier/aksi_supplier.php?act=insert" method="post">
 <!-- baris program yang lain -->
 </form>
<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="nama_supplier" class="from-label">Nama supplier</label>
                <input type="text" class="form-label" name="nama_supplier">
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
        <h3>Data supplier</h3>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th>#</th>
                  <th>Nama supplier</th>
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
                    <a href="#editsupplier" class="text-decoration-none" data-bs-toggle="modal">
                        <i class="bi bi-pencil-square text-success"></i>
                    </a>
                    <a hret="" class="text-decoration-none">
                        <i class="bi bi-trash text-danger"></i>
                    </a>
                </td>
                <!-- modal -->
                <div class="modal fade" id="editsupplier" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModallabel">Edit supplier</h5>
                            <button type="button" class="btn-close" data-bs-dismis="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <div class="mb-3">
                            <label class="form-label" for="nama_supplier">Nama supplier</labale>
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
                <a href="#editsupplier" class="text-decoration-none" data-bs-toggle="modal">
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
<tbody>
<!-- Data Supplier -->
<?php
$query = "SELECT * from supplier";
$exec = mysqli_query($koneksi, $query);
while($data = mysqli_fetch_array($exec)){
?>
<tr>
<td></td>
<td><?= $data['nama_supplier'] ?></td>
<td><?= $data['alamat'] ?></td>
<td><?= $data['telp'] ?></td>
<td><?= $data['email'] ?></td>
<td>
<a href="#editSupplier<?= $data['id'] ?>" class="text-decoration-none" data-bs-toggle="modal">
<i class="bi bi-pencil-square text-success"></i>
</a>
<a href="modul/supplier/aksi_supplier.php?act=delete&id=<?= $data['id'] ?>" class="text-decoration-none">
<i class="bi bi-trash text-danger"></i>
</a>
</td>
</tr>
<!-- Modal Edit Supplier -->
<div class="modal fade" id="editSupplier<?= $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<form action="modul/supplier/aksi_supplier.php?act=update&id=<?= $data['id'] ?>" method="post">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="mb-3">
<label class="form-label" for="nama_supplier">Nama Supplier</label>
<input type="text" class="form-control" name="nama_supplier" value="<?= $data['nama_supplier'] ?>">
</div>
<div class="mb-3">
<label class="form-label" for="alamat">Alamat</label>
<input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>">
</div>
<div class="mb-3">
<label class="form-label" for="telp">Telp</label>
<input type="text" class="form-control" name="telp" value="<?= $data['telp'] ?>">
</div>
<div class="mb-3">
<label class="form-label" for="email">Email</label>
<input type="text" class="form-control" name="email" value="<?= $data['email'] ?>">
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>
</form>
</div>
<?php
}
?>
</tbody>

            
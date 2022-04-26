<style>
  
table {
    border: 0px;
    table-layout: fixed;
    width: 100px;
}

th, td {
    border: 0px;
    width: 100px;
    overflow: hidden;
}
</style>
<div class="container mt-5">
    <div class="card card-body border-info col-6 mx-auto">
        <form action="<?=base_url('market/addData')?>" method="post" enctype="multipart/form-data">
<div class="form-group">
                <div class="row">
                    <div class="col-md-3 my-auto">
                        Name
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 my-auto">
                        Description
                    </div>
                    <div class="col-md-9">
                        <textarea name="deskripsi" id="" cols="" rows="5" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 my-auto">
                        Price
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="harga" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 my-auto">
                        Link
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="link" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 my-auto">
                      <label>Select Image File </label>
                    </div>
                    <div class="col-md-9">
                    <input type="file" name="image">
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-right">
              <input type="submit" name="submit" class="btn btn-primary" value="Upload">
            </div>
</form>
    </div>

    <div class="card card-body mt-3">
        <h4>Skins</h4>
        <table class="table">
        <thead class="thead-dark">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Uploaded</th>
        <th scope="col">Link</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    
    <tbody>
    <?php $i=1 ; foreach($weapon as $wpn):?>
      <tr>
      <th scope="row"><?=$i++?></th>
      <td><?=$wpn['name']?></td>
      <td>
        <details>
          <summary></summary>
          <?=$wpn['deskripsi']?>
        </details>
      </td>
      <td><?=$wpn['harga']?></td>
      <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($wpn['image']); ?>" class="card-img-top" style="width:50px;height=50px;"></td>
      <td><?=$wpn['uploaded']?></td>
      <td>
        <details>
          <summary></summary>
          <?=$wpn['link']?>
        </details>
      </td>
      <td>
        <a href="<?=base_url('market/deleteData')?>/<?=$wpn['id']?>" class="btn btn-danger btn-sm" 
        onclick="return confirm('are you sure')">Hapus</a>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal<?=$wpn['id']?>">
          Edit
        </button>
      </td>
        </tr>
        <?php endforeach?>
      </tbody>
    </table>
  </div>
</div>

<?php foreach($weapon as $wpn):?>
<div class="modal fade" id="exampleModal<?=$wpn['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Skin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('market/editData')?>" method="post">
        
        <div class="form-group">
          <input type="hidden" name="id" class="form-control" value="<?=$wpn['id']?>">
          <label for="">Name</label><input type="text" name="name" class="form-control" value="<?=$wpn['name']?>" readonly>
        </div>
        <div class="form-group">
          <label for="">Description</label>
          <input type="textarea" name="deskripsi" class="form-control" value="<?=$wpn['deskripsi']?>" readonly>
        </div>
        <div class="form-group">
          <label for="">Price</label><input type="text" name="harga" class="form-control" value="<?=$wpn['harga']?>">
        </div>
        <div class="form-group">
          <label for="">Image</label><br>
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($wpn['image']); ?>" class="card-img-top" style="width:75px;height=75px;">
        </div>
        <div class="form-group">
          <label for="">Link</label><input type="text" name="link" class="form-control" value="<?=$wpn['link']?>">
        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach?>

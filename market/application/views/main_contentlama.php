<div class="container mt-5">
    <div class="card card-body border-info col-6 mx-auto">
        <form action="<?=base_url('example/addData')?>" method="post">
            <h4 class="text-center">Biodata Mahasiswa</h4>
            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 my-auto">
                        Nama
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nama" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group"> 
                <div class="row">
                    <div class="col-md-3 my-auto">
                        Jenis Kelamin
                    </div>
                    <div class="col-md-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Pria">
                            <label class="form-check-label" for="inlineRadio1">Pria</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Wanita">
                            <label class="form-check-label" for="inlineRadio2">Wanita</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 my-auto">
                        Kelas
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="kelas" class="form-control">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 my-auto">
                        Jurusan
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="jurusan" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 my-auto">
                        Tanggal Lahir
                    </div>
                    <div class="col-md-9">
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 my-auto">
                        Kota Lahir
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="kota_lahir" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 my-auto">
                        Alamat
                    </div>
                    <div class="col-md-9">
                        <textarea name="alamat" id="" cols="" rows="5" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <button class="btn btn-success float-right">Simpan Data</button>
        </form>
    </div>
</div>
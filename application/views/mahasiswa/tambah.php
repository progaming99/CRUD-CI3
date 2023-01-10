<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data
            </div>
            <div class="card-body">

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                        <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                    </div>
                
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control" id="nim">
                        <div class="form-text text-danger"><?= form_error('nim'); ?></div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email">
                        <div class="form-text text-danger"><?= form_error('email'); ?></div>
                    </div>
                    
                    <select class="form-select" aria-label="Default select example" for="jurusan" id="jurusan" name="jurusan">
                        <option selected>Pilih Jurusan</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="DKV">DKV</option>
                        <option value="Rekam Medic">Rekam Medic</option>
                        <option value="Manajemen bisnis">Manajemen bisnis</option>
                    </select>                

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="submit" name="tambah">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

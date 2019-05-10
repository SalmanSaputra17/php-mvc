<div class="container mt-4">
    <div class="row">
        <div class="col-md-5">
            <h3 class="display-4 mb-4">Detail Mahasiswa</h3>
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h4><?= $data['mhs']['nama'] ?></h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $data['mhs']['nrp'] ?></li>
                    <li class="list-group-item"><?= $data['mhs']['email'] ?></li>
                    <li class="list-group-item"><?= $data['mhs']['jurusan'] ?></li>
                </ul>
                <div class="card-footer">
                    <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-secondary btn-sm btn-block">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
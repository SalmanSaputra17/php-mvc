<div class="container mt-4">
    <div class="row">
        <div class="col-md-5">
            <?= Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm modalTambahMahasiswa" data-toggle="modal" data-target="#formModal">
                Tambah Data Mahasiswa
            </button>

            <h3 class="display-4 mt-2 mb-4">Daftar Mahasiswa</h3>

            <form action="<?= BASEURL; ?>/mahasiswa/search" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari nama ..." id="search" name="search" autocomplete="off">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary" id="btn-search">Search</button>
                    </div>
                </div>
            </form>
            
            <ul class="list-group">
                <?php foreach($data['mhs'] as $row): ?>
                    <li class="list-group-item">
                        <?= $row['nama'] ?>
                        <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $row['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                        <a href="#" class="badge badge-success float-right ml-1 modalUbahMahasiswa" data-id="<?= $row['id'] ?>" data-toggle="modal" data-target="#formModal">Ubah</a>
                        <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $row['id'] ?>" class="badge badge-primary float-right ml-1">Detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>  
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>  
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>
            <div class="form-group">
                <label for="email">Email</label>  
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>  
                <select name="jurusan" id="jurusan" class="form-control">
                    <option disable selected>--pilih jurusan--</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Jaringan dan Komunikasi">Teknik Jaringan dan Komunikasi</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                    <option value="Pemasaran">Pemasaran</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>


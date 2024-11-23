<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <!-- Modal -->
            <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nrp" class="form-label">NRP</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan NRP" name="nrp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email" name="email" required>
                                </div>
                                <label for="email" class="form-label">Jurusan</label>
                                <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan" required>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                    <option value="Desain Komunikasi Visual">Desain Komukasi Visual</option>
                                    <option value="Teknik Permesinan">Teknik Permesinan</option>
                                </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary">Details</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
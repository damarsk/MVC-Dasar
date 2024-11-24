<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm mb-2 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <!-- Modal -->
            <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="judulModalHeader">Tambah Data Mahasiswa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div> 
                        <div class="modal-body">
                            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
                                <input type="hidden" name="id" id="id">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nrp" class="form-label">NRP</label>
                                    <input type="number" class="form-control" id="nrp" placeholder="Masukkan NRP" name="nrp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
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
                    <li class="list-group-item">
                        <?= $mhs['nama'] ?>
                        <a href="" class="badge text-bg-danger text-decoration-none float-end me-1" onclick="return confirmDelete(event, <?= $mhs['id'] ?>)">Hapus</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-success text-decoration-none float-end me-2 tampilModalEdit" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>">Edit</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary text-decoration-none float-end me-2">Details</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
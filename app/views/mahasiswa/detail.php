<div class="container mt-5">
    <div class="card text-bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Data Mahasiswa</div>
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp'] ?></h6>
            <p class="card-text"><?= $data['mhs']['email'] ?></p>
            <p class="card-text"><?= $data['mhs']['jurusan'] ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>
<?php

class About {
    public function index($nama = 'Damar', $pekerjaan = 'Siswa') {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page() {
        echo 'about/page';
    }
}
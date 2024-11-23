const BASEURL = "/phpmvc/public"; // Base URL manual

function confirmDelete(event, id) {
    // Mencegah perilaku default dari tautan
    event.preventDefault();

    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data ini akan dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirect ke URL dengan BASEURL
            window.location.href = `${BASEURL}/mahasiswa/hapus/${id}`;
        }
    });
}
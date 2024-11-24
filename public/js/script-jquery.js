$(function () {
    $(".tombolTambahData").on("click", function () {
        $('#judulModalHeader').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambahkan');
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
    })

    $(".tampilModalEdit").on("click", function () {
        $('#judulModalHeader').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', `${BASEURL}/mahasiswa/ubah`);

        const id = $(this).data('id');

        $.ajax({
            url: `${BASEURL}/mahasiswa/getubah`,
            data: { id: id },
            method: 'POST',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });


})
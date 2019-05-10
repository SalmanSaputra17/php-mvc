$(function() {
    $('.modalTambahMahasiswa').on('click', function() {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
    });

    $('.modalUbahMahasiswa').on('click', function() {
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/update');

        const id = $(this).data('id');
        // console.log(id);
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/edit',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                 $('#nama').val(data.nama);
                 $('#nrp').val(data.nrp);
                 $('#email').val(data.email);
                 $('#jurusan').val(data.jurusan);
                 $('#id').val(data.id);
            }
        });

    });
});
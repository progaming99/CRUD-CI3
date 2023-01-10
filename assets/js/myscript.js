const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire(
        'Data Mahasiswa ',
        'Berhasil ' + flashData,
        'success'
    );
}

//tombol hapus
$('.hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda akan menghapus data mahasiswa!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Iya'
      }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
      })
})
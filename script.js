$(document).ready(function() {
    // Mendapatkan data mahasiswa yang ingin diedit dari URL
    var urlParams = new URLSearchParams(window.location.search);
    var editNim = urlParams.get('nim');
    var editNama = urlParams.get('nama');
    var editAlamat = urlParams.get('alamat');
  
    // Mengisi nilai input dengan data mahasiswa yang ingin diedit
    $('#edit-nim').val(editNim);
    $('#edit-nama').val(editNama);
    $('#edit-alamat').val(editAlamat);
  });
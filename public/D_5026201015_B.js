$(document).ready(function(){
   
    $("#forms").validate({
        rules:{
            namabarang: {
                required: true,
                minlength: 10
            },
            harga: {
                required: true,
                digits: true,
                min:  5000
            },
            jenisbarang: {
                required: true,
            },
            barcode:{
                required: true,
                digits: true,
                minlength: 10
            }
        },
        messages:{
            namabarang: {
                required: "Bagian ini harus diisi",
                minlength: "minimum 10 character",
            },
            harga: {
                required: "Bagian ini harus diisi",
                digits: "Harus berupa angka",
                min: "Minimum harga 5000"
            },
            jenisbarang:{
                required: "Bagian ini harus diisi",
            },
            barcode:{
                required: "Bagian ini harus diisi",
                digits: "Harus berupa angka",
                minlength: "Minimum 10 angka"
            },
        }
    })
})
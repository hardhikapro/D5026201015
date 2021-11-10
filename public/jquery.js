$(document).ready(function(){
    $.validator.addMethod(
        "letterswithbasicpunc",
        function (value, element) {
          return this.optional(element) || /^[a-z\-.,()'"\s]+$/i.test(value);
        },
        "Huruf doang cok gada nama pake angka"
      );
    $("#forms").validate({
        rules: {
            inputname: {
                required: true, 
                letterswithbasicpunc: true
            },
            inputusername: {
                required: true,
                maxlength: 8,
                minlength: 6
            
            },
            email: {
                required: true,
            },
            state: {
                required: true, 
            },
            inputAddress: {
                required: true,
            },
            kodepos: {
                required: true,
                maxlength: 6,
                minlength: 6
            }
        },
        messages: {
            inputname: {
                required: "Bagian ini harus diisi"
            },
            inputusername: {
                maxlength:"Tidak boleh lebih dari 8",
                minlength: "Minimal 6 Karakter",
                required: "Bagian ini harus diisi"
            },
            email: {
                required: "Masukkan alamat email yang valid",
            },
            state: {
                required: "Bagian ini harus diisi"
            },
            inputAddress: {
                required: "Bagian ini harus diisi"
            },
            kodepos: {
                maxlength: "input harus terdiri dari 6 karakter",
                minlength: "input harus terdiri dari 6 karakter",
                required: "Bagian ini harus diisi"
            }
        } 

    })
})
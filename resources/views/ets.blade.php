<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Evaluasi Tengah Semester</title>
    <link rel="stylesheet" href="D_5026201015_B.css">
</head>

<body>

    <div class="container-fluid">
        <div class="card">
            <form id="forms" class="row g-3" action="www.bukalapak.com">
                <h6>Nama Mahasiswa : Hardhika Propitadewa</h6>
                <h6>Nama Panggilan : Dhika</h6>
                <h6>NRP : 5026201015</h6>
                <div class="card-header text-center" style="font-size: 30px;">
                    Form Input Data Barang
                </div>
                <div class="card-body">
                    <div class="row">
                        <label for="namabarang" class="col-sm-2 col-form-label col-form-label-lg">Nama Barang
                            <span>:</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg" id="namabarang"
                                placeholder="ex. minyak goreng" name="namabarang">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label for="harga" class="col-sm-2 col-form-label col-form-label-lg">Harga :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg" id="harga"
                                placeholder="ex. 5.000" name="harga">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label for="jenisbarang" class="col-sm-2 col-form-label col-form-label-lg">Jenis
                            Barang :</label>
                        <div class="col-sm-10">
                            <select id="jenisbarang" class="form-select" name="jenisbarang">
                                <option value="" selected disabled></option>
                                <option value="true">Makanan</option>
                                <option value="true">Minuman</option>
                                <option value="true">Non Mamin</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label for="barcode" class="col-sm-2 col-form-label col-form-label-lg">Kode Barcode
                            :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg" id="barcode"
                                placeholder="ex. 35263824" name="barcode">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                    <div class="col-3 offset-2">
                        <button type="submit" class="btn btn-primary my-4 form-control" id="kirim">Kirim</button>
                    </div>
                    <div class="col-3 offset-2 ">
                        <button type="reset" class="btn btn-primary my-4 form-control" id="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="D_5026201015_B.js"></script>
</body>

</html>

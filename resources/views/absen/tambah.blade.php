@extends('layout.happy') 
@section('Konten')
    <a href="/absen"> Kembali</a>

    <br />
    <br />

    <form action="/absen/store" method="post">
        {{ csrf_field() }}
        <div class="container-fluid">

            <div class="row">
                <div class='col-lg'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Nama Pegawai </label>
                        <span class="col-sm-1">:</span>
                        <div class='col-sm-8 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-3 control-label">Tanggal</label>
                        <span class="col-sm-1">:</span>
                        <div class='col-sm-8 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : "id"
                        });
                    });
                </script>
            </div>
            
                Status
                <div class="row">
                <label class="col-2" for="h">HADIR</label><br>
                    <input class="col-1" type="radio" id="h" name="status" value="H">
                    
                </div>
                <div class="row">
                <label class="col-2" for="a">TIDAK HADIR</label><br>
                    <input class="col-1" type="radio" id="a" name="status" value="A" checked="checked">
                    
                </div>
                <input type="submit" class="btn btn-primary my-4 form-control" value="Simpan Data">
            
        </div>
        
    </form>
@endsection


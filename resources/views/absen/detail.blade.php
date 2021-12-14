@extends('layout.happy') 
@section('Konten')
	<a href="/absen"> Kembali</a>

	<br/>
 
	<br/>

	@foreach($absen as $a)
	<form action="/absen" method="get">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $a->ID }}">
         <div class="container-fluid">

            <div class="row">
                <div class='col-lg'>
                <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Nama Pegawai </label>
                        <span class="col-sm-1">:</span>
                        <div class='col-sm-8 input-group date' id='nama'>    
                        <label type='text' class="form-control" name="nama" required="required" value="{{ $a->pegawai_nama }}">{{ $a->pegawai_nama }}</label>
                        </div>
                    </div>
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
                        <label type='text' class="form-control" name="tanggal" required="required" value="{{ $a->Tanggal }}">{{ $a->Tanggal }}</label>
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

            <div class="row mt-3">
                <label for="status" class="col-lg-3 control-label">Status</label>
                <div class="col-sm-1">:</div>
                <div class="col-lg-8">
                    <div class="form-check-inline">
                    <label type="text" name="Status" class="form-control" >{{$a->Status}}</label>
                    </div>
                </div>
            </div>

        </div>
        
	</form>
	@endforeach

    @endsection

    
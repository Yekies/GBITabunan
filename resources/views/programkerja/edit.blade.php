@extends('layout.home')
@section('content')
<div class="container">
<div class="card">
    <div class="card-header">
        <h5 class="text-center">Mengedit Program Kerja</h5>

    </div>
    
  <div class="card-body">
  @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('programkerja.update',$programkerja->id)}}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Program :</strong>
                    <input type="text" name="program" value="{{ $programkerja->program }}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tujuan Program:</strong>
                    <input type="text" name="tujuanp" value="{{ $programkerja->tujuanp }}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Waktu : </strong>
                    <input type="time" name="waktu" value="{{ $programkerja->waktu }}" class="form-control">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan:</strong>
                    <textarea class="form-control" style="height:150px" name="keterangan">{{ $programkerja->keterangan }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn-sm btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
</div>
</div>
</div>
@endsection
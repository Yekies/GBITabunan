@extends('layout.home')
@section('content')
<div class="container"><br><br>
<div class="card">
    <div class="card-header">
        <h5>Detail Renungan Harian</h5>
</div>       
  <div class="card-body">
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                {{ $renungan->judul }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Isi</strong>
                {{ $renungan->isi }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal</strong>
                {{ $renungan->tanggal }}
            </div>
        </div><br>
        
    </div>
    </div>
    </form>
    <div class="pull-right">
            <a class="btn-sm btn btn-primary" href="{{ route('sejarah.index') }}">Kembali</a>
        </div>
  </div>
</div>
</div>
</div>

@endsection
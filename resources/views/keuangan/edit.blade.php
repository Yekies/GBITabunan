@extends('layout.home')
@section('content')
<div class="container">
<div class="card">
    <div class="card-header">
        <h5 class="text-center">Mengedit Keuangan
    </h5>

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
  
    <form action="{{ route('keuangan.update',$keuangan->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal :</strong>
                    <input type="date" name="tanggal" value="{{ $keuangan->tanggal }}" class="form-control" placeholder="Tanggal">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan:</strong>
                    <input type="text" name="keterangan" value="{{ $keuangan->keterangan }}" class="form-control" placeholder="Keterangan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Jenis Keuangan :</label>
                    <select class="form-control" name="jenis" id="jenis">

                        <option value="pemasukan" {{ $keuangan->jenis === 'pemasukan' ? 'selected' : '' }}>Pemasukan</option>
                        <option value="pengeluaran" {{ $keuangan->jenis === 'pengeluaran' ? 'selected' : '' }}>Pengeluaran</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah :</strong>
                    <input type="text" name="jumlah" value="{{ $keuangan->jumlah }}" class="form-control" placeholder="Nominal">
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
@extends('layout.home')
@section('content')
<div class="container">
<div class="card">
    <div class="card-header">
        <h5 class="text-center">Membuat Keuangan</h5>

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
   
<form action="{{ route('keuangan.store') }}" method="POST">
    @csrf
  
     <div class="row">

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal : </strong>
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Jenis Keuangan :</label>
                <select class="form-control" name="jenis">
                    <option>Pilih</option>
                    <option value="pemasukan">Pemasukan</option>
                    <option value="pengeluaran">Pengeluaran</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah :</strong>
                <input type="text" placeholder="Jumlah Uang" class="form-control" name="jumlah">
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




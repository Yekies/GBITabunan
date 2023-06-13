@extends('layout.home')
@section('content')
<a href="{{ url('keuangan/create') }}" class="btn btn-sm bg-primary">Tambah : +/- </a><br><br><br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <h4>Data Pemasukan Gereja</h4>
    <hr>
    <tbody>
        @foreach($pemasukan1 as $p)
        <tr>
            <td>{{ $p->tanggal }}</td>
            <td>{{ $p->keterangan }}</td>
            <td>{{ $p->jumlah }} </td>
            <td>
                <form action="{{ route('keuangan.destroy',$p->id) }}" method="POST">
                    <a class="btn btn-success btn-sm " href="{{ route('keuangan.edit',$p->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm ">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="3"><strong>Total Pemasukan</strong></td>
            <td><strong>Total Pemasukan : {{  $pemasukan }}</strong></td>            
        </tr>
    </tbody>    
    </tbody>

</table>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <h4>Data Pengeluaran Gereja</h4>        
    <hr>
    <tbody>
        @foreach($pengeluaran1 as $p)
        <tr>
            <td>{{ $p->tanggal }}</td>
            <td>{{ $p->keterangan }}</td>
            <td>{{ $p->jumlah }} </td>
            <td>
                <form action="{{ route('keuangan.destroy',$p->id) }}" method="POST">
                    <a class="btn btn-success btn-sm " href="{{ route('keuangan.edit',$p->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm ">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <tfoot>    
            <tr>
                <td colspan="3"><strong>Total Pengeluaran</strong></td>
                <td><strong>Total Pengeluaran: {{  $pengeluaran }}</strong></td>            
            </tr>
            <tr>
                <td colspan="3"><strong>Total saldo</strong></td>
                <td><strong>Sisa Saldo: {{ $saldo }}</strong></td>            
            </tr>
        </tfoot>
</table>

@endsection
@extends('layout.home')
@section('content')
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5 class="text-center">Edit Link Live</h5><hr> 
            </div>
        </div>
    </div>
   
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
  
    <form action="{{ route('live.update',$live->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="text" name="judul" value="{{ $live->judul }}" class="form-control" placeholder="Judul">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Link:</strong>
                    <textarea class="form-control" style="height:150px" name="link" placeholder="Link">{{ $live->link }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </div><br>
        </div>
   
    </form>
@endsection
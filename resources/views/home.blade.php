@extends('layout.home')
@section('content')
<div class="container">
    <h4 class="text-center">DATA DEWASA</h4>
    <hr>
  <div class="row">
    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color:#F9FFFF;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH JEMAAT DEWASA</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;background-color: rgb(0, 110, 255)">
                <i class="fa fa-users text-white fs-3"></i>
            </div>
        </div>
    </div>
    <div class="col-12">
        <span class="fs-3 fw-bold">{{ $dewasas->count(); }}</span>
    </div>
    </div>
    </div>


    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color: #F9FFFF;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH LAKI-LAKI</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;background-color: rgb(0, 255, 255)">
                <i class="fa fa-users text-white fs-3"></i>
            </div>
        </div>
    </div>
    <div class="col-12">
        <span class="fs-3 fw-bold">{{ $maleCount }}</span>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color: #F9FFFF;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH PEREMPUAN</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;background-color: rgb(251, 255, 0)">
                <i class="fa fa-users text-white fs-3"></i>
            </div>
        </div>
    </div>
    <div class="col-12">
        <span class="fs-3 fw-bold">{{ $femaleCount }}</span>
    </div>
    </div>
    </div>
  </div>


  <h4 class="text-center">DATA ANAK</h4>
  <hr>
  <div class="row">
    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color:#fefff9;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH JEMAAT ANAK</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;background-color: rgb(255, 115, 0)">
                <i class="fa fa-users text-white fs-3"></i>
            </div>
        </div>
    </div>
    <div class="col-12">
        <span class="fs-3 fw-bold">{{ $anak->count(); }}</span>
    </div>
    </div>
    </div>


    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color: #F9FFFF;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH LAKI-LAKI</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;background-color: rgb(255, 0, 212)">
                <i class="fa fa-users text-white fs-3"></i>
            </div>
        </div>
    </div>
    <div class="col-12">
        <span class="fs-3 fw-bold">{{ $maleCount }}</span>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color: #F9FFFF;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH PEREMPUAN</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;background-color: rgb(255, 0, 64)">
                <i class="fa fa-users text-white fs-3"></i>
            </div>
        </div>
    </div>
    <div class="col-12">    
        <span class="fs-3 fw-bold">{{ $femaleCount }}</span>
    </div>
    </div>
    </div>
  </div>
</div>
  
@endsection
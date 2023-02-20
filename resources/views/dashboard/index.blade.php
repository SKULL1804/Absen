@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card shadow">
            <div class="card-body">
                <h6 class="fs-6 fw-light m-2">Data Jabatan</h6>
                <h4 class="fw-bold">{{ $positionCount }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow">
            <div class="card-body">
                <h6 class="fs-6 fw-light m-2">Data Karyawan</h6>
                <h4 class="fw-bold">{{ $userCount }}</h4>
            </div>
        </div>
    </div>
</div>
@endsection


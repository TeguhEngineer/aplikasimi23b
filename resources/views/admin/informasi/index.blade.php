@extends('master.kerangka-admin')
@section('container')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                {{-- <div class="col-sm-6">
                    <h1 class="m-0">Informasi</h1>
                </div> --}}
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <b>Informasi</b>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, molestias!
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary btn-sm">Buat Informasi</button>
                            <button class="btn btn-warning btn-sm">Ubah Informasi</button>
                        </div>  
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
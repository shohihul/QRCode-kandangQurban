
@extends('admin.layouts.layout', ['pageSlug' => 'indexLivestock'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Hewan Ternak</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Hewan Ternak</a></li>
            <li class="breadcrumb-item active">Detail Hewan Ternak #{{ $livestock->id}}</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">ID #{{ $livestock->id }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="text-center">
                            <img class="col-sm-6"
                            src="{{ asset('assets/img/livestock/' . $livestock->image) }}">
                            <br>
                            <a href="{{ route('admin-livestock.edit', $livestock->id) }}" class="btn btn-secondary btn-xs"><i class="fas fa-edit"></i> Edit</a>
                        </div>
                        <hr>
                        <strong><i class="fas fa-user mr-1"></i> | Peternak</strong>
                        <h5 class="text-muted">{{ $livestock->cattleman->name }}</h5>
                        <hr>

                        <strong><i class="fas fa-paw mr-1"></i> | Hewan Ternak</strong>
                        <h5 class="text-muted">{{ $livestock->name }}</h5>
                        <hr>

                        <strong><i class="fas fa-bookmark mr-1"></i> | Jenis Ternak</strong>
                        <h5 class="text-muted">{{ $livestock->livestockType->livestockCategory->name }} - {{$livestock->livestockType->name }}</h5>
                        <hr>

                        <strong><i class="fas fa-tag mr-1"></i> | Harga</strong>
                        <h5 class="text-muted">Rp. {{ number_format($livestock->price, 0, '.', '.')}}</h5>
                        <hr>

                        <strong><i class="fas fa-check mr-1"></i> | Stock</strong>
                        <h5 class="text-muted">{{ $livestock->stock }}</h5>
                        <hr>

                        <strong><i class="fas fa-weight mr-1"></i> | Berat Total</strong>
                        <h5 class="text-muted">{{ $livestock->weight }} Kg</h5>
                        <hr>

                        <strong><i class="fas fa-info-circle mr-1"></i> | Deskripsi</strong>
                        <p class="text-muted">{{ $livestock->description }}</p>
                        <hr>
                    </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section ('script')

@endsection

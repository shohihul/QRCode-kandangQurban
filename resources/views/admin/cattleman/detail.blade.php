
@extends('admin.layouts.layout', ['pageSlug' => 'indexCattleman'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Peternak</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Peternak</a></li>
            <li class="breadcrumb-item active">Detail Peternak #{{ $cattleman->id}}</li>
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
                        <h3 class="card-title">ID #{{ $cattleman->id }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="text-center">
                            <img class="col-sm-6"
                            src="{{ asset('assets/img/cattleman/' . $cattleman->photo_profile) }}"
                            alt="User profile picture">
                            <br>
                            <a href="{{ route('admin-cattleman.edit', $cattleman->id) }}" class="btn btn-secondary btn-xs"><i class="fas fa-edit"></i> Edit</a>
                            <hr>
                            <strong><i class="fas fa-user mr-1"></i> | Nama</strong>
                            <h5 class="text-muted">{{ $cattleman->name }}</h5>
                            <hr>

                            <strong><i class="fas fa-envelope mr-1"></i> | E-Mail</strong>
                            <h5 class="text-muted">{{ $cattleman->email }}</h5>
                            <hr>

                            <strong><i class="fas fa-venus-mars mr-1"></i> | Jenis Kelamin</strong>
                            <h5 class="text-muted">
                            @if ($cattleman->gender)
                                Laki-laki
                            @else
                                Perempuan
                            @endif
                            </h5>
                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> | Lokasi</strong>
                            <h5 class="text-muted">{{ $cattleman->regencie->name }}, {{ $cattleman->regencie->province->name }} - {{ $cattleman->address }}</h5>
                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> | QR Code</strong>
                            <br>
                                <img src="{{ asset('assets/img/qrcode/cattleman/' . $cattleman->qr_code) }}" alt="QR Code">
                            <hr>
                        </div>
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


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
            <li class="breadcrumb-item active">index</li>
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
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Hewan Ternak</h3></h3>
                <div class="card-tools">
                    <a href="{{ route('admin-cattleman.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Hewan Peternak</a>
                </div>
                
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>image</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Weight</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($livestock as $row)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td><img src="{{ asset('assets/img/livestock/' . $row->image ) }}" width="150px"></td>
                    <td>{{ $row->livestockType->livestockCategory['name'] }}</td>
                    <td>{{ $row->livestockType->name }}</td>
                    <td>Rp. {{ number_format($row->price, 0, '.', '.')}}</td>
                    <td>{{ $row->weight }} Kg</td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <form action="{{ route('admin-livestock.delete', $row->id) }}" method="post">
                            @csrf
                            @method('delete')
                                <a href="{{ route('admin-livestock.detail', $row->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
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

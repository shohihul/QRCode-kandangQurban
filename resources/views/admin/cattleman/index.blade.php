
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
                        <h3 class="card-title">List Data Peternak</h3></h3>
                        <div class="card-tools">
                            <a href="{{ route('admin-cattleman.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data Peternak</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Provinsi</th>
                            <th>Kabupaten</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($cattleman as $row)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email}}</td>
                                @if ( $row->gender == 'male' )
                                    <td>Laki - Laki</td>
                                @else
                                    <td>Perempuan</td>
                                @endif
                                <td>{{ $row->regencie->province->name}}</td>
                                <td>{{ $row->regencie->name }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <form action="{{ route('admin-cattleman.delete', $row->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                            <a href="{{ route('admin-cattleman.detail', $row->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                        {{ $cattleman->links() }}
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

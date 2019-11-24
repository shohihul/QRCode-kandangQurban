
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
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
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
                    <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <th>Image</th>
                    <td>Sapi</td>
                    <td>Sapi Sumatra</td>
                    <td>Rp. 10.000.000</td>
                    <td>150 kg</td>
                    <td>
                        <button class="btn btn-info">Detail</button>
                    </td>
                    </tr>
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

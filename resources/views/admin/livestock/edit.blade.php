
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
            <li class="breadcrumb-item active">Edit Hewan Ternak #{{ $livestock->id}}</li>
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
                        <h3 class="card-title">Edit Data Hewan Peternak</h3></h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{route('admin-livestock.update', $livestock->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                        <div class="form-group">
                            <label>Peternak</label>
                            <input type="text" class="form-control" value="{{ $livestock->cattleman->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" value="{{ $livestock->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Hewan ternak</label>
                            <select class="custom-select" id="category">
                                <option disabled selected>Pilih Hewan Ternak</option>
                                @foreach ($category as $kategori)
                                    <option value="{{ $kategori->id }}" {{ $kategori->id == $livestock->livestockType->livestock_category_id ? 'selected' : '' }}>{{ $kategori->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Hewan Ternak</label>
                            <select class="custom-select" id="type" name="livestock_type_id" required>
                                <option value="{{ $livestock->livestockType->id }}" selected>{{ $livestock->livestockType->name }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga (Rp.)</label>
                            <input type="text" class="form-control uang" name="price" value="{{ $livestock->price }}" required>
                        </div>
                        <div class="form-group">
                            <label>Stock Hewan Ternak</label>
                            <input type="text" class="form-control" name="stock" value="{{ $livestock->stock }}" required>
                        </div>
                        <div class="form-group">
                            <label>Berat Hewan Ternak (Kg)</label>
                            <input type="text" class="form-control" name="weight" value="{{ $livestock->weight }}" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" class="form-control" name="description" required>{{ $livestock->description }}</textarea>
                        </div>
                        <div class="text-center">
                            <img class="col-sm-6"
                            src="{{ asset('assets/img/livestock/' . $livestock->image) }}">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>Foto</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label">Pilih file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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
<script type="text/javascript">
    $(document).ready(function(){
        $("#category").each(function(){
            $.ajax({
                url: "{{ route('admin.type.get_by_category') }}?category_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#type').append(data.html);
                }
            });
        });

        $("#category").change(function(){
            $.ajax({
                url: "{{ route('admin.type.get_by_category') }}?category_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#type').html(data.html);
                }
            });
        });
    })
</script>
@endsection

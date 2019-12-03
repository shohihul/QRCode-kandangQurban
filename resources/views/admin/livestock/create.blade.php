
@extends('admin.layouts.layout', ['pageSlug' => 'addLivestock'])

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
            <li class="breadcrumb-item active">create</li>
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
                        <h3 class="card-title">Tambah Hewan Peternak</h3></h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('admin-livestock.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card-body">
                        <div class="form-group">
                            <label>Peternak</label>
                            <select class="custom-select" id="cattleman_id" name="cattleman_id" required>
                                <option disabled selected>Pilih Peternak</option>
                                @foreach ($cattlemans as $cattleman)
                                    <option value="{{ $cattleman->id }}">{{ $cattleman->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukkan nama hewan ternak" required>
                        </div>
                        <div class="form-group">
                            <label>Hewan ternak</label>
                            <select class="custom-select" id="category">
                                <option disabled selected>Pilih Hewan Ternak</option>
                                @foreach ($category as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Hewan Ternak</label>
                            <select class="custom-select" id="type" name="livestock_type_id" required>
                                <option disabled selected>Pilih Jenis Hewan Ternak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga (Rp.)</label>
                            <input type="text" class="form-control uang" name="price" placeholder="Masukkan harga hewan ternak" required>
                        </div>
                        <div class="form-group">
                            <label>Stock Hewan Ternak</label>
                            <input type="text" class="form-control" name="stock" placeholder="Masukkan stock hewan ternak" required>
                        </div>
                        <div class="form-group">
                            <label>Berat Hewan Ternak (Kg)</label>
                            <input type="text" class="form-control" name="weight" placeholder="Masukkan Berat Hewan Ternak (Kg)" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" class="form-control" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" required>
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

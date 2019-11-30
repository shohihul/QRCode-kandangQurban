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
            <li class="breadcrumb-item active">Edit #{{ $cattleman->id}}</li>
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
                        <h3 class="card-title">Edit Data Peternak</h3></h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('admin-cattleman.update', $cattleman->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Alamat Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $cattleman->email }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Peternak</label>
                                <input type="text" class="form-control" name="name" value="{{ $cattleman->name }}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin : </label>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    @if ( $cattleman->gender == 'male')
                                        <label class="btn btn-primary active">
                                            <input type="radio" class="form-check-input" name="gender" value="male" checked>
                                            Pria
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" class="form-check-input" name="gender" value="female">
                                            Wanita
                                        </label>
                                    @else
                                        <label class="btn btn-primary">
                                            <input type="radio" class="form-check-input" name="gender" value="male">
                                            Pria
                                        </label>
                                        <label class="btn btn-primary active">
                                            <input type="radio" class="form-check-input" name="gender" value="female" checked>
                                            Wanita
                                        </label>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <select class="custom-select" id="province">
                                    <option disabled selected>Pilih Provinsi</option>
                                    @foreach ($province as $provinsi)
                                    <option value="{{$provinsi->id}}" {{ $provinsi->id == $cattleman->regencie->province_id ? 'selected' : '' }}>{{$provinsi->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kabupaten</label>
                                <select class="custom-select" id="regencie" name="regencie_id">
                                    <option value="{{ $cattleman->regencie_id}}" selected>{{ $cattleman->regencie->name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat Lengkap</label>
                                <input type="text" class="form-control" name="address" value="{{ $cattleman->address }}">
                            </div>
                            <div class="text-center">
                                <img class="profile-user-img img-fluid"
                                src="{{ asset('assets/img/cattleman/' . $cattleman->photo_profile) }}"
                                alt="User profile picture">
                                <br>
                            </div>
                            <div class="form-group">
                                <label>Foto Profil</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="photo_profile">
                                    <label class="custom-file-label">Ubah Foto Profil</label>
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
        $("#province").each(function(){
            $.ajax({
                url: "{{ route('admin.regencie.get_by_province') }}?province_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#regencie').append(data.html);
                }
            });
        });
        
        $("#province").change(function(){
            $.ajax({
                url: "{{ route('admin.regencie.get_by_province') }}?province_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#regencie').html(data.html);
                }
            });
        });
    })
</script>
@endsection

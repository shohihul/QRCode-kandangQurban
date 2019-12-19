@extends('layouts.app')

@section('content')
<div class="container">
    <div id="myCarousel" class="carousel" data-ride="carousel">
        <div class="carousel-inner" style="height:500px;">
            <div class="item active">
                <img src="{{ asset('assets/img/cattleman/' . $cattleman->photo_profile) }}" alt="" style="width:100%; " >
            </div>
        </div>
    </div>
    <hr>
    <div class="row">

    <div class="container">
        <h2>Profile Petenak</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th>Nama :</th>
                    <td>{{ $cattleman->name}}</td>
                </tr>
                <tr>
                    <th>E-Mail</th>
                    <td>{{ $cattleman->email}}</td>
                </tr>
                <tr>
                    <th>Alamat :</th>
                    <td>{{ $cattleman->regencie->name }}, {{ $cattleman->regencie->province->name }} - {{ $cattleman->address }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>
                        @if ($cattleman->gender)
                            Laki-laki
                        @else
                            Perempuan
                        @endif
                    </td>
                </tr>


            </tbody>
        </table>
        <h2>List Hewan Ternak</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
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
            @foreach ( $livestock as $row )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td><img src="{{ asset('assets/img/livestock/' . $row->image ) }}" width="150px"></td>
                    <td>{{ $row->livestockType->livestockCategory['name'] }}</td>
                    <td>{{ $row->livestockType->name }}</td>
                    <td>Rp. {{ number_format($row->price, 0, '.', '.')}}</td>
                    <td>{{ $row->weight }} Kg</td>
                    <td><a href="{{ route('livestock.detail', $row->id)}}" class="btn btn-warning text-white">Detail</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>  
        <div class="pagination justify-content-center">
        {{ $livestock->links() }}
        </div>
        <hr>
        <div>
            <h2>Riwayat Peternak</h2>
            <hr>

            @if ($history->count() == 0)
                <h6 class="text-center text-secondary"><i>- Riwayat Kosong -</i></h6>
            @endif

            @foreach ($history as $row)
            <div class="card">
                <div class="row history">
                    @if (isset($row->image))
                    <div class="col-sm-3">
                        <img src="{{ asset('assets/img/cattleman/history/' . $row->image) }}" alt="" style="width: 100%; ">
                    </div>
                    <div class="col-sm-9">
                        <h3>{{ $row->title}}</h3>
                        <hr>
                        <P>
                            {!! nl2br(e($row->description)) !!}
                        </P>
                        <small class="text-secondary"><i>Dibuat pada : {{ $row->created_at }}</i></small>
                    </div>
                    @else
                    <div class="col-sm-12">
                        <h3>{{ $row->title}}</h3>
                        <hr>
                        <P>
                            {{ nl2br(e($row->description)) }}
                        </P>
                        <small class="text-secondary"><i>Dibuat pada : {{ $row->created_at }}</i></small>
                    </div>
                    @endif
                </div>
            </div>
            <br>
            @endforeach
            <div class="pagination justify-content-center">
            {{ $history->links() }}
            </div>
        </div>
        <hr>
        @auth
            @if (Auth::guard('web')->check() && Auth::user()->id == $cattleman->id)
                <div class="card">
                    <div class="card-body login-card-body">
                        <br>
                        <h2 class="text-center">Tambah Riwayat</h2>
                        <br>
                        <hr>
                        <form method="POST" action="{{ route('cattleman-history.store') }}" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label for=""><b>Judul</b></label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Deskripsi</b></label>
                                <textarea type="text" class="form-control" name="description"></textarea>
                            </div>
                            <div class="text-center">
                                <img src="" alt="" style="max-width: 70%; max-height: 300px;" id="show">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Foto </b><small><i class="text-secondary">(Opsional)</i></small></label>
                                <input type="file" class="form-control" name="image" id="img">
                            </div>
                            <input type="hidden" name="cattleman_id" value="{{ $cattleman->id }}">
                            <br>
                            <div class="row">
                                <div class="col-2">
                                    <button type="submit" class="btn btn-warning btn-block btn-flat text-white">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        @endauth
    
    </div>
    </div>
</div>
@endsection
@section('script')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#show').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#img").change(function(){
        readURL(this);
    });
</script>
@endsection
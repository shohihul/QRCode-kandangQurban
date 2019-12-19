@extends('layouts.app')

@section('content')
<div class="container">
    <div id="myCarousel" class="carousel" data-ride="carousel">
        <div class="carousel-inner" style="height:500px;">
            <div class="item active">
                <img src="{{ asset('assets/img/livestock/' . $livestock->image) }}" alt="" style="width:100%; " >
            </div>
        </div>
    </div>
    <hr>
    <div class="row">

        <div class="container">
            <h2>Detail Hewan ternak</h2>
            <table class="table">
                <tbody>
                        <th>Peternak :</th>
                        <td><b>{{ $livestock->cattleman->name }}</b></td>
                        <td><a href="{{ route('cattleman.profile', $livestock->cattleman_id)}}" class="btn btn-warning btn-sm text-white">Lihat Profil</a></td>
                    <tr>
                    <th>Name :</th>
                        <td>{{ $livestock->name }}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Harga :</th>
                        <td>Rp. {{ number_format($livestock->price, 0, '.', '.')}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Stok :</th>
                        <td>{{ $livestock->stock }}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Berat Badan :</th>
                        <td>{{ $livestock->weight }} Kg</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div>
                <h2>Description</h2>
                <hr>
                <P>
                    {{ $livestock->description }}
                </P>
            </div>
            <div>
                <h2>Riwayat Hewan</h2>
                <hr>

                @if ($history->count() == 0)
                    <h6 class="text-center text-secondary"><i>- Riwayat Kosong -</i></h6>
                @endif
                
                @foreach ($history as $row)
                <div class="card">
                    <div class="row history">
                        @if (isset($row->image))
                        <div class="col-sm-3">
                            <img src="{{ asset('assets/img/livestock/history/' . $row->image) }}" alt="" style="width: 100%; ">
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
                                {!! nl2br(e($row->description)) !!}
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
                @if (Auth::guard('web')->check() && Auth::user()->id == $livestock->cattleman_id)
                    <div class="card">
                        <div class="card-body login-card-body">
                            <br>
                            <h2 class="text-center">Tambah Riwayat Hewan Ternak</h2>
                            <br>
                            <hr>
                            <form method="POST" action="{{ route('livestock-history.store') }}" enctype="multipart/form-data">
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
                                <input type="hidden" name="livestock_id" value="{{ $livestock->id }}">
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
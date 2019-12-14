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
                    <td><a href="{{ route('cattleman.profile', $livestock->cattleman_id)}}" class="btn btn-warning">Lihat Prodil</a></td>
                </tr>
                <th>Name :</th>
                    <td>{{ $livestock->name }}</td>

                </tr>
                <tr>
                    <th>Harga :</th>
                    <td>{{ $livestock->price }}</td>

                </tr>
                <tr>
                    <th>Stok :</th>
                    <td>{{ $livestock->stock }}</td>

                </tr>
                <tr>
                    <th>Berat Badan :</th>
                    <td>{{ $livestock->weight }}</td>

                </tr>


            </tbody>
            </table>
            <div>
                <h2>Description</h2>
                <P>
                    {{ $livestock->description }}
                </P>
            </div>

            <div>
                <h2>Riwayat Hewan</h2>
                <P>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.Commodi accusantium itaque culpa ad ullam porro magnam quisquam ab quo modi soluta, id quia incidunt distinctio possimus alias recusandae aperiam adipisci?
                </P>
            </div>
        </div>
    </div>
</div>
@endsection
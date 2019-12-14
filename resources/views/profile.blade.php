@extends('layouts.app')

@section('content')
<div class="container">
    <div id="myCarousel" class="carousel" data-ride="carousel">
        <div class="carousel-inner" style="height:500px;">
            <div class="item active">
                <img src="{{ asset('assets/img/cattleman/' . $cattleman->photo_profile) }}" alt="Los Angeles" style="width:100%; " >
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
                    <td>{{ $row->weight }}</td>
                    <td><a href="{{ route('livestock.detail', $row->id)}}" class="btn btn-warning">Detail</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    
    </div>
    </div>
</div>
@endsection
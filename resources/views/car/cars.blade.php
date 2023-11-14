@extends('layouts.main')

@section('content')
<div class="container my-4">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Image</th>
                    <th scope="col" class="text-center">Name</th>
                    <th scope="col" class="text-center">Brand</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $car)
                <tr>
                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                    <td class="text-center">
                        <img src="{{ $car->gambar }}" alt="{{ $car->nama }}" class="img-fluid rounded" style="max-width: 200px; max-height: 200px;">
                    </td>
                    <td class="text-center">{{ $car->nama }}</td>
                    <td class="text-center">{{ $car->merek }}</td>
                    <td class="text-center">
                        <a href="/cars/{{ $car->id }}" class="btn btn-info mx-1">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

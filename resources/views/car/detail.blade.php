@extends("layouts.main")

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Car Detail</h1>

    <div class="row mt-4">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <img src="{{ $car->gambar }}" class="card-img-top" alt="{{ $car->nama }}">
                <div class="card-body">
                <hr>
                    <h2 class="card-title text-center">Name : {{ $car->nama }}</h2>
                    <p class="card-text text-center lead">Brand : {{ $car->merek }}</p>
                    <p class="card-text text-center">Color : {{ $car->warna }}</p>
                    <p class="card-text text-center">Door : {{ $car->pintu }}</p>
                    <hr>
                    <p class="card-text text-center"><strong>Year : </strong> {{ $car->tahun }}</p>
                    <hr>
                    <div class="text-center mt-3">
                        <a href="/cars" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

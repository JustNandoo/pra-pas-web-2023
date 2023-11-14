@extends("layouts.main")

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Motorcycle Detail</h1>

    <div class="row mt-4">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <img src="{{ $motorcycle->gambar }}" class="card-img-top mx-auto" alt="{{ $motorcycle->nama }}" style="max-width: 50%; height: auto;">
                <div class="card-body">
                <hr>
                    <h2 class="card-title text-center" style="font-size: 1.5rem;">Name: {{ $motorcycle->nama }}</h2>
                    <p class="card-text text-center lead" style="font-size: 1.2rem;">Brand: {{ $motorcycle->merek }}</p>
                    <p class="card-text text-center" style="font-size: 1.2rem;">Color: {{ $motorcycle->warna }}</p>
                    <hr>
                    <p class="card-text text-center" style="font-size: 1.2rem;"><strong>Year:</strong> {{ $motorcycle->tahun }}</p>
                    <hr>
                    <div class="text-center mt-3">
                        <a href="/motorcycles" class="btn btn-secondary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

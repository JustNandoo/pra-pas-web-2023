@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <img src="{{ asset($foto) }}" alt="Foto" class="img-fluid square-image mb-4" style="max-width: 300px; width: 100%;">
            <h1 class="display-4">About Me</h1>
            <p class="lead">Hello, I'm Nando. Nice to meet you!</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Personal Information</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Name :</strong> {{$nama}}</li>
                        <li class="list-group-item"><strong>Absent :</strong> {{$absen}}</li>
                        <li class="list-group-item"><strong>Class :</strong> {{$kelas}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .square-image {
        border-radius: 3;
    }
</style>
@endsection

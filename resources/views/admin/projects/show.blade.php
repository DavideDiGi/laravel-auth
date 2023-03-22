@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        @if (session('success'))
            <div class="alert alert-success w-50 mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="col d-flex">
            <h2>{{ $project->id }}</h2>
            <h2 class="mx-1"> - </h2>
            <h2 class="card-title">{{ $project->title }}</h2>
        </div>
    </div>
    <div class="w-50 ms-5 mt-2 pe-4 border-end pb-4 border-bottom">
        <h5 class="title-slug">{{ $project->slug }}</h5>
        <p class="card-text fw-light">{{ $project->content }}</p>
        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Modifica</a>
        <a href="#" class="btn btn-danger">Elimina</a>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-dark float-end">
            Torna indietro
        </a>
    </div> 
</div>
@endsection

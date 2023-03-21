@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>Tutti i progetti</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card-container">

            @foreach ($projects as $project)
                
                <div class="card mb-3">
                    <img src="" class="cover card-img-top" alt="">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5>{{ $project->id }}</h5>
                            <h5 class="mx-1"> - </h5>
                            <h5 class="card-title">{{ $project->title }}</h5>
                        </div>
                        <p class="slug card-text"><small class="text-muted">{{ $project->slug }}</small></p>
                        <p class="content card-text">{{ $project->content }}</p>
                    </div>
                </div>

            @endforeach
            
        </div>

    </div>
</div>
        @endsection
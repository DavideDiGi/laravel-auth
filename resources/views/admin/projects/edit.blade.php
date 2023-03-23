@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">

    <div class="row justify-content-center">
        <h2>Modifica progetto</h2>
    </div>

    @include('partials.success')

    @include('partials.errors')

    <div class="row mb-4">

        <div class="col">
            
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo<span>*</span></label>
                    <input type="text" class="form-control" id="title" name="title" required value="{{ old('title', $project->title) }}" placeholder="Inserisci titolo...">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Descrizione<span>*</span></label>
                    <textarea class="form-control" rows="5" id="content" name="content" required placeholder="Inserisci una descrizione...">{{ old('content', $project->content) }}</textarea>
                </div>

                <div>
                    <p class=" small fw-light text-secondary d-inline-block">i campi contrasegnati con <span>*</span> sono obbligatori</p>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-dark float-end">Torna indietro</a>
                </div>
                
                    <button type="submit" class="btn btn-warning">Conferma modifiche</button>
            </form>

        </div>

    </div>

</div>

@endsection

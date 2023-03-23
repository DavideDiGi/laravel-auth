@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">

    <div class="row justify-content-center">
        <h2>Crea un nuovo progetto</h2>
    </div>

    @include('partials.errors')

    <div class="row mb-4">

        <div class="col">
            
            <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo<span>*</span></label>
                    <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}" placeholder="Inserisci titolo...">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Descrizione<span>*</span></label>
                    <textarea class="form-control" rows="5" id="content" name="content" required placeholder="Inserisci una descrizione...">{{ old('content') }}</textarea>
                </div>

                <div>
                    <p class=" small fw-light text-secondary d-inline-block">i campi contrasegnati con <span>*</span> sono obbligatori</p>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-dark float-end">Torna indietro</a>
                </div>

                    <button type="submit" class="btn btn-success">Crea progetto</button>

            </form>

        </div>

    </div>

</div>

@endsection

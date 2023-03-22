@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">

    <div class="row justify-content-center">
            <h2>Crea un nuovo progetto</h2>
    </div>

    @if ($errors->any())
        <div class="row mb-4">
            <div class="col">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>    
        </div>    
    @endif

    <div class="row mb-4">
        <div class="col">
            <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}" placeholder="Inserisci titolo...">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Descrizione</label>
                    <textarea class="form-control" rows="5" id="content" name="content" required placeholder="Inserisci una descrizione...">{{ old('content') }}</textarea>
                </div>
                <div>

                    <button type="submit" class="btn btn-success">Crea progetto</button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-dark float-end">
                        Torna indietro
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

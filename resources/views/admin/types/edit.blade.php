@extends('layouts.app')

@section('page-title', 'Modifica Tecnologia')

@section('main-content')
<div class="container">
    <h2>Modifica Tipo</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.types.update', $type->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $type->name) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna <i class="fa-solid fa-pen"></i></button>
    </form>
</div>
@endsection
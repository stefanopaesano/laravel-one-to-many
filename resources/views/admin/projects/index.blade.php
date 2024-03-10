@extends('layouts.app')

@section('page-title', 'Tutti i Progetti')

@section('main-content')
    <div class="container">
        <h1 class="text-primary text-center">Progetti</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3 ms-4">Crea Nuovo Progetto <i class="fa-solid fa-plus"></i></a>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Immagine</th>
                                <th>Titolo</th>
                                <th>Tecnologia</th>
                                <th>Descrizione</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td><img src="{{ $project->image }}" alt="{{ $project->title }}" style="max-width: 100px;"></td>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ $project->type ? $project->type->name : 'N/D' }}</td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->date }}</td>
                                    <td><a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-info btn-sm">Visualizza</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

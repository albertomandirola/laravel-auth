@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content d-flex align-items-center">
                    <div class="fw-bold">Aggiungi un nuovo modello: </div>
                    <a class="btn btn-primary fw-bold m-3" href="{{ Route('admin.projects.create') }}"
                        role="button">Aggiungi</a>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Model</th>
                            <th scope="col">Brand</th>
                            <th scope="col">year</th>
                            <th scope="col">Engine</th>
                            <th scope="col">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>{{ $project->link }}</td>
                                <td>{{ $project->cover_image }}</td>
                                <td>
                                    <div class="button-container d-flex">
                                        <a class="btn btn-warning  m-2"
                                            href="{{ route('admin.projects.edit', ['project' => $project['id']]) }}">Edit
                                        </a>
                                        <form class=" m-2"
                                            action="{{ route('admin.projects.destroy', ['project' => $project['id']]) }}"
                                            method="POST"
                                            onsubmit="return confirm('sei sicuro di voler eliminare il progetto?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

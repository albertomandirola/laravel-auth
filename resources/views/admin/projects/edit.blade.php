@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-uppercase text-dark-emphasis">Modifica del progetto "{{ $project->title }}"</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title" class="control-label ">Modello</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" id="title" placeholder="Inserisci il modello"
                                    value="{{ old('title') ?? $project->title }}" required>
                                @if ($error_message != '')
                                    <div class="text-danger m-1 ">
                                        {{ $error_message }}
                                    </div>
                                @endif
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="link" class="control-label ">Link</label>
                                <input type="text" class="form-control @error('link') is-invalid @enderror"
                                    name="link" id="link" placeholder="Inserisci il Link a GitHub"
                                    value="{{ old('link') ?? $project->link }}" required>
                                @error('link')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-2">
                                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                <input name="cover_image" class="form-control @error('title') is-invalid @enderror"
                                    type="file" id="formFileMultiple" value="{{ $project->cover_image }}" multiple>
                                @error('cover_image')
                                    <div class="text-danger m-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description" class="control-label ">Descrizione</label>
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Info aggiuntive" rows="5" required>{{ old('description') ?? $project->description }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="slug" class="control-label ">Slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                    name="slug" id="slug" placeholder="Inserisci lo slug"
                                    value="{{ old('slug') ?? $project->slug }}" required>
                                @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Salva</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

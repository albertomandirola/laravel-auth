@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-uppercase text-dark-emphasis ">Aggiungi un'progetto:</h2>
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group my-2">
                        <label for="title" class="control-label m-1 ">Titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            id="title" placeholder="Inserisci il Titolo" value="{{ old('title') }}" required>
                        @error('title')
                            <div class="text-danger m-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input name="cover_image" class="form-control @error('title') is-invalid @enderror" type="file"
                            id="formFileMultiple" multiple>
                        @error('cover_image')
                            <div class="text-danger m-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="link" class="control-label m-1 ">Link</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" name="link"
                            id="link" placeholder="Inserisci il Link a github" value="{{ old('link') }}" required>
                        @error('link')
                            <div class="text-danger m-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group my-2">
                        <label for="description" class="control-label m-1  ">Descrizione</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                            placeholder="Info aggiuntive" cols="100" rows="10" required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-danger m-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group my-2">
                        <button type="submit" class="btn btn-sm btn-success m-1">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

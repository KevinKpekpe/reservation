@extends('admin.base')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $room->exists ? 'Modifier' : 'Créer' }} une Chambre</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('admin.rooms.index') }}" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <section class="content">
            <!-- Default box -->
            <div class="container">
                <form action="{{ $room->exists ? route('admin.rooms.update', $room) : route('admin.rooms.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($room->exists)
                        @method('PUT')
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="code">Code:</label>
                                        <input type="text" id="code" name="code" value="{{ old('code', $room->code) }}" class="form-control" required>
                                        @error('code')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="prix">Prix:</label>
                                        <input type="number" id="prix" name="prix" value="{{ old('prix', $room->prix) }}" class="form-control" required>
                                        @error('prix')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="numero_chambre">Numéro de chambre:</label>
                                        <input type="text" id="numero_chambre" name="numero_chambre" value="{{ old('numero_chambre', $room->numero_chambre) }}" class="form-control" required>
                                        @error('numero_chambre')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre_de_personne">Nombre de personnes:</label>
                                        <input type="number" id="nombre_de_personne" name="nombre_de_personne" value="{{ old('nombre_de_personne', $room->nombre_de_personne) }}" class="form-control" required>
                                        @error('nombre_de_personne')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="description">Description:</label>
                                        <textarea id="description" name="description" class="form-control" rows="5" required>{{ old('description', $room->description) }}</textarea>
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="category_id">Catégorie:</label>
                                        <select id="category_id" name="category_id" class="form-control" required>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id', $room->category_id) == $category->id ? 'selected' : '' }}>
                                                    {{ $category->description }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>Options:</label>
                                        <div class="form-check">
                                            @foreach($options as $option)
                                                <div>
                                                    <input type="checkbox" name="options[]" value="{{ $option->id }}" class="form-check-input"
                                                        {{ (old('options') && in_array($option->id, old('options'))) || ($room->options->contains($option->id)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">{{ $option->description }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                        @error('options')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="images">Images:</label>
                                        <input type="file" id="images" name="images[]" multiple accept="image/*" class="form-control">
                                        @error('images')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    @if($room->exists && $room->pictures->count() > 0)
                                        <div class="mb-3">
                                            <h3>Images existantes:</h3>
                                            <div class="row">
                                                @foreach($room->pictures as $picture)
                                                    <div class="col-md-3 mb-3">
                                                        <img src="{{ asset('storage/' . $picture->image) }}" alt="Room Image" class="img-thumbnail" style="width: 100%;">
                                                        <form action="{{ route('admin.pictures.destroy', $picture) }}" method="POST" class="mt-2">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                                        </form>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 pt-3">
                        <button type="submit" class="btn btn-primary">
                            {{ $room->exists ? 'Mettre à jour' : 'Créer' }} la chambre
                        </button>
                        <a href="{{ route('admin.rooms.index') }}" class="btn btn-outline-dark ml-3">Annuler</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@extends('admin.base')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $user->exists ? 'Modifier' : 'Créer' }} un Utilisateur</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <section class="content">
            <!-- Default box -->
            <div class="container">
                <form action="{{ $user->exists ? route('admin.users.update', $user) : route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($user->exists)
                        @method('PUT')
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name">Nom:</label>
                                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="lastname">Prénom:</label>
                                        <input type="text" id="lastname" name="lastname" value="{{ old('lastname', $user->lastname) }}" class="form-control" required>
                                        @error('lastname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="date_naissance">Date de naissance:</label>
                                        <input type="date" id="date_naissance" name="date_naissance" value="{{ old('date_naissance', $user->date_naissance) }}" class="form-control" required>
                                        @error('date_naissance')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="adresse">Adresse:</label>
                                        <textarea id="adresse" name="adresse" class="form-control" rows="3" required>{{ old('adresse', $user->adresse) }}</textarea>
                                        @error('adresse')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="telephone">Téléphone:</label>
                                        <input type="text" id="telephone" name="telephone" value="{{ old('telephone', $user->telephone) }}" class="form-control" required>
                                        @error('telephone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="code_postal">Code postal:</label>
                                        <input type="text" id="code_postal" name="code_postal" value="{{ old('code_postal', $user->code_postal) }}" class="form-control">
                                        @error('code_postal')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="username">Nom d'utilisateur:</label>
                                        <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" class="form-control" required>
                                        @error('username')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password">Mot de passe:</label>
                                        <input type="password" id="password" name="password" class="form-control" {{ $user->exists ? '' : 'required' }}>
                                        @if($user->exists)
                                            <small class="form-text text-muted">Laissez vide pour conserver le mot de passe actuel.</small>
                                        @endif
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="role">Rôle:</label>
                                        <select id="role" name="role" class="form-control" required>
                                            <option value="client" {{ old('role', $user->role) == 'client' ? 'selected' : '' }}>Client</option>
                                            <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                        </select>
                                        @error('role')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="profil">Photo de profil:</label>
                                        <input type="file" id="profil" name="profil" accept="image/*" class="form-control">
                                        @error('profil')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    @if($user->exists && $user->profil)
                                        <div class="mb-3">
                                            <img src="{{ asset('storage/' . $user->profil) }}" alt="Photo de profil" class="img-thumbnail" style="max-width: 200px;">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 pt-3">
                        <button type="submit" class="btn btn-primary">
                            {{ $user->exists ? 'Mettre à jour' : 'Créer' }} l'utilisateur
                        </button>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-dark ml-3">Annuler</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

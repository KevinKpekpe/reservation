@extends('frontend.base')
@section('content')
    @include('frontend.layouts.breadcrumb-area')
    <div class="body-overlay"></div>
    <div class="dashboard-area section-bg-2 dashboard-padding">
        <div class="container">
            <div class="dashboard-contents-wrapper">
                <div class="dashboard-icon">
                    <div class="sidebar-icon">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                <div class="dashboard-left-content">
                    @include('frontend.profil.navigation')
                </div>
                <div class="dashboard-right-contents mt-4 mt-lg-0">
                    <div class="dashboard-reservation">
                        <div class="single-reservation bg-white base-padding">
                            <h3 class="single-reservation-title"> Profile </h3>
                            <div class="custom--form dashboard-form">
                                <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="dashboard-flex-input">
                                        <div class="dashboard-input mt-4">
                                            <label class="label-title"> Nom </label>
                                            <input type="text" value="{{ old('name', Auth::user()->name) }}" name="name" class="form--control" placeholder="Nom">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="dashboard-flex-input">
                                        <div class="dashboard-input mt-4">
                                            <label class="label-title"> Prénom </label>
                                            <input type="text" value="{{ old('lastname', Auth::user()->lastname) }}" name="lastname" class="form--control" placeholder="Prénom">
                                            @error('lastname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="dashboard-flex-input">
                                        <div class="dashboard-input mt-4">
                                            <label class="label-title"> Date de Naissance </label>
                                            <input type="date" value="{{ old('date_naissance', Auth::user()->date_naissance) }}" name="date_naissance" class="form--control">
                                            @error('date_naissance')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="dashboard-flex-input">
                                        <div class="dashboard-input mt-4">
                                            <label class="label-title"> Adresse </label>
                                            <textarea name="adresse" class="form--control" placeholder="Adresse">{{ old('adresse', Auth::user()->adresse) }}</textarea>
                                            @error('adresse')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="dashboard-flex-input">
                                        <div class="dashboard-input mt-4">
                                            <label class="label-title"> Code Postal </label>
                                            <input type="text" value="{{ old('code_postal', Auth::user()->code_postal) }}" name="code_postal" class="form--control" placeholder="Code Postal">
                                            @error('code_postal')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="dashboard-flex-input">
                                        <div class="dashboard-input mt-4">
                                            <label class="label-title"> Email </label>
                                            <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="form--control" placeholder="Email">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="dashboard-flex-input">
                                        <div class="dashboard-input mt-4">
                                            <label class="label-title"> Téléphone </label>
                                            <input type="text" name="telephone" value="{{ old('telephone', Auth::user()->telephone) }}" class="form--control" placeholder="Téléphone">
                                            @error('telephone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="dashboard-flex-input">
                                        <div class="dashboard-input mt-4">
                                            <label class="label-title"> Photo de profil </label>
                                            <input type="file" name="profil" class="form--control">
                                            @error('profil')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    @if(Auth::user()->profil)
                                        <div class="dashboard-flex-input">
                                            <div class="dashboard-input mt-4">
                                                <label class="label-title">Photo de profil actuelle</label>
                                                <img src="{{ asset('storage/' . Auth::user()->profil) }}" alt="Photo de profil" style="max-width: 200px;">
                                                <div class="mt-2">
                                                    <label>
                                                        <input type="checkbox" name="remove_profil"> Supprimer la photo de profil
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="btn-wrapper mt-4">
                                        <button type="submit" class="cmn-btn btn-bg-1"> Enregistrer les modifications </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.base')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Modifier le Paiement</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="card">
                    <form action="{{ route('admin.paiements.update', $paiement->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="reservation_id">Réservation</label>
                                <select name="reservation_id" id="reservation_id" class="form-control">
                                    <option value="">Sélectionner une réservation</option>
                                    @foreach($reservations as $reservation)
                                        <option value="{{ $reservation->id }}" {{ $paiement->reservation_id == $reservation->id ? 'selected' : '' }}>
                                            {{ $reservation->code }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('reservation_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="stripe_payement_id">ID Stripe</label>
                                <input type="text" name="stripe_payement_id" id="stripe_payement_id" class="form-control" value="{{ old('stripe_payement_id', $paiement->stripe_payement_id) }}">
                                @error('stripe_payement_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="currency">Monnaie</label>
                                <input type="text" name="currency" id="currency" class="form-control" value="{{ old('currency', $paiement->currency) }}">
                                @error('currency')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="amount">Montant</label>
                                <input type="number" name="amount" id="amount" class="form-control" value="{{ old('amount', $paiement->amount) }}" step="0.01">
                                @error('amount')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="payment_status">Statut</label>
                                <input type="text" name="payment_status" id="payment_status" class="form-control" value="{{ old('payment_status', $paiement->payment_status) }}">
                                @error('payment_status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                            <a href="{{ route('admin.paiements.index') }}" class="btn btn-secondary">Retour</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection

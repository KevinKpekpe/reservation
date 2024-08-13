@extends('admin.base')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Détails du Paiement</h1>
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
                    <div class="card-header">
                        <h3 class="card-title">Paiement #{{ $paiement->id }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <p><strong>ID Réservation:</strong> {{ $paiement->reservation->code ?? 'N/A' }}</p>
                                <p><strong>Stripe ID:</strong> {{ $paiement->stripe_payement_id }}</p>
                                <p><strong>Montant:</strong> {{ $paiement->amount }}</p>
                                <p><strong>Monnaie:</strong> {{ $paiement->currency }}</p>
                                <p><strong>Statut:</strong> {{ $paiement->payment_status }}</p>
                            </div>
                            <div class="col-sm-6">
                                <p><strong>Date de Création:</strong> {{ $paiement->created_at }}</p>
                                <p><strong>Date de Mise à Jour:</strong> {{ $paiement->updated_at }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.paiements.index') }}" class="btn btn-secondary">Retour</a>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection

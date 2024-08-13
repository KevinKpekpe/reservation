@extends('admin.base')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Paiements</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card">
                    <form action="">
                        <div class="card-header">
                            <div class="card-tools">
                                <div class="input-group input-group" style="width: 250px;">
                                    <input type="text" name="search" value="{{ request('search') }}"
                                        class="form-control float-right" placeholder="Rechercher">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th width="60">ID</th>
                                    <th>ID Réservation</th>
                                    <th>Stripe ID</th>
                                    <th>Montant</th>
                                    <th>Monnaie</th>
                                    <th>Statut</th>
                                    <th width="100">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($paiements as $paiement)
                                    <tr>
                                        <td>{{ $paiement->id }}</td>
                                        <td>{{ $paiement->reservation->code ?? 'N/A' }}</td>
                                        <td>{{ $paiement->stripe_payement_id }}</td>
                                        <td>{{ $paiement->amount }}</td>
                                        <td>{{ $paiement->currency }}</td>
                                        <td>
                                            @if($paiement->payment_status == 'succeeded')
                                                <span class="badge badge-success">{{ $paiement->payment_status }}</span>
                                            @elseif($paiement->payment_status == 'failed')
                                                <span class="badge badge-danger">{{ $paiement->payment_status }}</span>
                                            @else
                                                <span class="badge badge-warning">{{ $paiement->payment_status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('admin.paiements.show', $paiement->id) }}" class="btn btn-sm btn-info mr-1">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.paiements.edit', $paiement->id) }}" class="btn btn-sm btn-primary mr-1">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.paiements.destroy', $paiement) }}" method="POST" class="mr-1">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                                </form>
                                                @if($paiement->payment_status != 'refunded')
                                                    <form action="{{ route('admin.paiements.refund', $paiement) }}" method="POST">
                                                        @csrf
                                                        <button class="btn btn-sm btn-warning" type="submit"><i class="fas fa-undo"></i></button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Aucun paiement trouvé.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        {{ $paiements->links() }}
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection

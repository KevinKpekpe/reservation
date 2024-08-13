@extends('admin.base')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Réservations</h1>
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
                                    <th>Date d'arrivée</th>
                                    <th>Date de départ</th>
                                    <th>Montant</th>
                                    <th>Utilisateur</th>
                                    <th>Chambre</th>
                                    <th width="100">Statut</th>
                                    <th width="100">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($reservations as $reservation)
                                    <tr>
                                        <td>{{ $reservation->id }}</td>
                                        <td>{{ $reservation->date_arrive }}</td>
                                        <td>{{ $reservation->date_depart }}</td>
                                        <td>{{ $reservation->amount }}</td>
                                        <td>{{ $reservation->user->name }}</td>
                                        <td>{{ $reservation->room->code }}</td>
                                        <td>
                                            @if($reservation->status == 'Confirmée')
                                                <span class="badge badge-success">{{ $reservation->status }}</span>
                                            @elseif($reservation->status == 'Annulée')
                                                <span class="badge badge-danger">{{ $reservation->status }}</span>
                                            @else
                                                <span class="badge badge-warning">{{ $reservation->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('admin.reservations.edit', $reservation->id) }}" class="btn btn-sm btn-primary mr-1">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                @if($reservation->status == 'En attente')
                                                    <form action="{{ route('admin.reservations.confirm', $reservation) }}" method="POST" class="mr-1">
                                                        @csrf
                                                        <button class="btn btn-sm btn-success" type="submit"><i class="fas fa-check"></i></button>
                                                    </form>
                                                @endif
                                                @if($reservation->status != 'Annulée')
                                                    <form action="{{ route('admin.reservations.cancel', $reservation) }}" method="POST">
                                                        @csrf
                                                        <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-times"></i></button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Aucune réservation trouvée.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        {{ $reservations->links() }}
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@extends('master')
@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Liste des assurances</h5>
                            <div class="table-responsive">
                                <table class="table able-responsive datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom de la société</th>
                                            <th scope="col">Date début de l'assurance</th>
                                            <th scope="col">Date fin de l'assurance</th>
                                            <th scope="col">Voiture</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($assurance as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->societeAssurance }}</td>
                                                <td>{{ $item->datedebA }}</td>
                                                <td>{{ $item->datefinA }}</td>
                                                <td>{{ $item->voiture->marque }}</td>
                                                <td>
                                                    <a href="{{ url('editass/'.$item->id) }}" class="btn btn-warning">Modifier</a>
                                                    <a href="{{ url('deleteass/'.$item->id) }}" class="btn btn-danger">Supprimer</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr colspan="7">Pas d'assurance trouver</tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

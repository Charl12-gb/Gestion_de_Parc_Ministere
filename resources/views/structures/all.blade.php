@extends('master')
@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{url('addstructures')}}" class="btn btn-primary">Ajouter une structure</a><br><br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Liste des structures</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nom de la structure</th>
                                            <th scope="col">Emplacement de la structure</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($structure as $item)
                                            <tr>
                                                <td>{{ $item->nomStructure }}</td>
                                                <td>{{ $item->localisation }}</td>
                                                <td>
                                                    <a href="{{ url('editstructures/'.$item->id) }}" class="btn btn-warning">Modifier</a>
                                                    <a href="{{ url('delstructures/'.$item->id) }}" class="btn btn-danger">Supprimer</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr colspan="7">Pas de Structure trouver</tr>
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
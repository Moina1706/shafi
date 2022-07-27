

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h1>Gestion Apprenant</h1>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('apprenant/create') }}">Ajouter</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Telephone</th>
            <th>Niveau</th>
            <th>Actions</th>
        </tr>

        @foreach ($apprenants as $index => $apprenant)
            <tr>
                <td>{{ $index }}</td>
                <td>{{ $apprenant->nom }}</td>
                <td>{{ $apprenant->prenom }}</td>
                <td>{{ $apprenant->age }}</td>
                <td>{{ $apprenant->telephone }}</td>
                <td>{{ $apprenant->niveau }}</td>
                <td>
                    <form action="{{ url('apprenant/' . $apprenant ?? ('')->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('apprenant/' . $apprenant->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('apprenant/' . $apprenant->id . '/edit') }}">Modifier</a>


                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

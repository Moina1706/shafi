@extends('layouts.app')


@section('content')


    <h1>Modifier Apprenant</h1>


    @if ($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif

    <form method="post" action="{{ url('apprenant/' . $apprenant->id) }}">
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom"
                value="{{ $apprenant->nom }}">

        </div>

        <div class="form-group mb-3">

            <label for="prenom">Prenom:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrer Prenom" name="prenom"
                value="{{ $apprenant->prenom }}">

        </div>



        <div class="form-group mb-3">

            <label for="age">Age :</label>
            <input type="number" class="form-control" id="age" placeholder="age" name="age"
                value="{{ $apprenant->age }}">

        </div>

        <div class="form-group mb-3">

            <label for="telephone">Telephone:</label>
            <input type="number" class="form-control" id="telephone" placeholder="telephone" name="telephone"
                value="{{ $apprenant->telephone }}">

        </div>

        <div class="form-group mb-3">

            <label for="niveau">Niveau:</label>
            <input type="number" class="form-control" id="niveau" placeholder="niveau" name="niveau"
                value="{{ $apprenant->niveau }}">

        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection

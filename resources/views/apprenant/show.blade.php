@extends('layouts.app')


@section('content')
    <h1>AMAM SHAFI APPRENANT</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td>{{ $apprenant->nom }}</td>
        </tr>

        <tr>
            <th>Prenom:</th>
            <td>{{ $apprenant->prenom }}</td>
        </tr>

        <tr>
            <th>Age:</th>
            <td>{{ $apprenant->age }}</td>
        </tr>

        <tr>

            <th>Telephone:</th>
            <td>{{ $apprenant->telephone }}</td>

        </tr>

        <tr>

            <th>Niveau:</th>
            <td>{{ $apprenant->niveau }}</td>

        </tr>



    </table>
@endsection

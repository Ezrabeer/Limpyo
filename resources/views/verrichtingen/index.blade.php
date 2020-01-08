@extends('layouts.app')

@section('content')
    <div class='container'>
        <h1>Alle verrichtingen</h1>
        <table class="table table-hover mt-3">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Klant</th>
                <th scope="col">Datum</th>
                <th scope="col">Minuten</th>
                <th scope="col">Factuur</th>
            </tr>
            </thead>
            <tbody>
            @foreach($verrichtingen as $verrichting)
                <tr>
                    <th scope="row">{{ $verrichting->ID }}</th>
                    <td>{{ \App\Klant::find($verrichting->Klant)->Voornaam }}</td>
                    <td>{{ $verrichting->Datum }}</td>
                    <td>{{ $verrichting->Minuten }}</td>
                    <td>0</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $verrichtingen->links() }}
        <a class='btn btn-info text-white' href='{{ route('verrichting.create') }}'>Verrichting toevoegen</a>
    </div>
@endsection
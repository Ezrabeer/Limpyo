@extends('layouts.app')

@section('content')
    <div class='container'>
        @include('layouts.messages')
        <h1>Alle verrichtingen</h1>
        <table class="table table-hover mt-3">
            <thead>
            <tr>
                <th scope="col">Organisatie</th>
                <th scope="col">Datum</th>
                <th scope="col">Minuten</th>
            </tr>
            </thead>
            <tbody>
            @foreach($verrichtingen as $verrichting)
                <tr>
                    <td>{{ \App\Klant::find($verrichting->Klant)->Organisatie }}</td>
                    <td>{{ $verrichting->Datum }}</td>
                    <td>{{ $verrichting->Minuten }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $verrichtingen->links() }}
        <a class='btn btn-info text-white' href='{{ route('verrichting.create') }}'>Verrichting toevoegen</a>
    </div>
@endsection

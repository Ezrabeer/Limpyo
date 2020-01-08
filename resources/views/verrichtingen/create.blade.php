@extends('layouts.app')

@section('content')
    <div class='container'>
        <form>
            <div class='form-group'>
                <label for='klant-dropdown'>Kies klant</label>
                <select name='klant' class="form-control" id='klant-dropdown'>
                    @foreach($klanten as $klant)
                        <option value='{{ $klant->ID }}'>{{ $klant->Voornaam . ' ' . $klant->Achternaam }}</option>
                    @endforeach
                </select>
            </div>
            <div class='form-group'>
                <label for='datum'>Kies datum</label>
                <input class='form-control' id='datum' name='datum' type='date'
                       value='{{ \Carbon\Carbon::now()->format('Y-m-d') }}'>
            </div>
            <div class='form-group'>
                <label for='minuten'>Vul minuten in</label>
                <input class='form-control' id='minuten' name='minuten' type='number'>
            </div>
            <div class='form-group'>
                <button type='submit' class='btn btn-primary'>Verzend</button>
            </div>
        </form>
    </div>
@endsection
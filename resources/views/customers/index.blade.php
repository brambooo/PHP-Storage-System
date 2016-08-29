@extends('layout')

@section('title')
    Klantenoverzicht
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <h1>Klanten</h1>
    {{-- Unless means when not ... then execute this --}}
    @unless( empty($aCustomers) )
        @foreach($aCustomers as $customer)
            <li>{{ $customer->firstName . ' ' . $customer->lastName }}</li>
            <li>{{ $customer->location_id }}</li>
            <br>
        @endforeach
    @else
        <p><b>Geen klanten gevonden!</b></p>
    @endif

       <h3>Nieuwe klant toevoegen</h3>

        <form method="post" action="customers/add">
            {{-- This hidden field is nessecary else it doesn't work --}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="firstName">Voornaam:</label>
                <input type="text" name="firstName" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastName">Achternaam:</label>
                <input type="text" name="lastName" class="form-control">
            </div>
            <div class="form-group">
                <label for="zipcode">Postcode:</label>
                <input type="text" name="zipcode" class="form-control">
            </div>
            <div class="form-group">
                <label for="street">Straat:</label>
                <input type="text" name="street" class="form-control">
            </div>
            <div class="form-group">
                <label for="streetNr">Straatnummer:</label>
                <input type="number" name="streetNr" class="form-control">
            </div>
            <div class="form-group">
                <label for="city">Woonplaats:</label>
                <input type="text" name="city" class="form-control">
            </div>
            <div class="form-group">
                <label for="yearlyPrice">Prijs per jaar:</label>
                <input type="number" name="yearlyPrice" class="form-control">
            </div>
            <div class="form-group">
                <label for="zipcode">Locatie:</label>
                {{-- Show locations --}}
                <input type="number" name="location_id" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit"  class="btn btn-primary">Toevoegen</button>
            </div>
        </form>

@endsection

@section('footer')
    footer
@endsection
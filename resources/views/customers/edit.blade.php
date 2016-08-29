@extends('layout')

@section('title')
    Klantenoverzicht
@endsection

@section('content')

    <div class="panel-body">
        {{-- Validations errors; show only when needed --}}
        {{--            @include('common.errors)--}}

        <h3>Nieuwe klant toevoegen</h3>

        {{--important to declare default method type and below we can declare our desired type--}}
        <form method="post" action="/customers/update/{{$customer->id}}">
            {{--we need to define the patch value like this, because browsers doesn't know recognize these types yet. Browsers only know post and get right know--}}
            {{ method_field('PATCH') }}

            {{-- This hidden field is nessecary else it doesn't work --}}
            {{ csrf_field() }}

            <div class="form-group">
                <label for="firstName">Voornaam:</label>
                <input type="text" name="firstName" class="form-control" value="{{$customer->firstName}}">
            </div>
            <div class="form-group">
                <label for="lastName">Achternaam:</label>
                <input type="text" name="lastName" class="form-control" value="{{$customer->lastName}}">
            </div>
            <div class="form-group">
                <label for="zipcode">Postcode:</label>
                <input type="text" name="zipcode" class="form-control" value="{{$customer->zipcode}}">
            </div>
            <div class="form-group">
                <label for="street">Straat:</label>
                <input type="text" name="street" class="form-control" value="{{$customer->street}}">
            </div>
            <div class="form-group">
                <label for="streetNr">Straatnummer:</label>
                <input type="text" name="streetNr" class="form-control" value="{{$customer->streetNr}}">
            </div>
            <div class="form-group">
                <label for="city">Woonplaats:</label>
                <input type="text" name="city" class="form-control" value="{{$customer->city}}">
            </div>
            <div class="form-group">
                <label for="yearlyPrice">Prijs per jaar:</label>
                <input type="text" name="yearlyPrice" class="form-control" value="{{$customer->yearlyPrice}}">
            </div>
            <div class="form-group">
                <label for="zipcode">Locatie:</label>
                {{-- Show locations --}}
                <input type="text" name="location_id" class="form-control"value="{{$customer->location_id}}" >
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Toevoegen</button>
            </div>
        </form>

    </div>

@endsection

@section('footer')
    footer
@endsection
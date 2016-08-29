@extends('layout')

@section('title')
    Klantendetails
@endsection

@section('content')
    <h1>Klantendetails</h1>
    {{-- Unless means when not empty in this case; execute --}}
    @unless( empty($customer) )
        <li>{{ $customer->firstName . ' ' . $customer->lastName }}</li>
        {{-- Here we call the result of the relationship --}}
        <li>{{ $customer->location->name }}</li>
        <br>
        @else
            <p><b>Geen klant gevonden!</b></p>
        @endif

@endsection

@section('footer')
    footer
@endsection
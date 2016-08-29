@extends('layout')

@section('title')
    Klantenoverzicht
@endsection

@section('content')
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

@endsection

@section('footer')
    footer
@endsection
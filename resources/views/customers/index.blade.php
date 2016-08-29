@extends('layout')

@section('title')
    Klantenoverzicht
@endsection

@section('content')

    <h1>Klanten overzicht</h1>

    <table class="table table-hover">
        <thead>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Postcode</th>
        <th>Straat</th>
        <th>Nr</th>
        <th>Woonplaats</th>
        <th>PPP</th>
        <th>Locatie</th>
        <th>Acties</th>
        </thead>
        <tbody>
        {{-- Unless means when not ... then execute this --}}
        @unless( empty($aCustomers) )
            @foreach($aCustomers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->firstName }}</td>
                    <td>{{ $customer->lastName }}</td>
                    <td>{{ $customer->zipcode }}</td>
                    <td>{{ $customer->street }}</td>
                    <td>{{ $customer->streetNr }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>&euro;{{ $customer->yearlyPrice }}</td>
                    <td>{{ $customer->location['name'] }}</td>
                    <td>
                        <form action="{{url('customers/'. $customer->id)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                        <button class="btn btn-primary"><li class="fa fa-edit"></li></button>
                    </td>
                </tr>
            @endforeach
            @else
                <p><b>Geen klanten gevonden!</b></p>
            @endif
        </tbody>
    </table>

    <h3>Nieuwe klant toevoegen</h3>

    <form method="post" action="customers/add">
        {{-- This hidden field is nessecary else it doesn't work --}}
        {{ csrf_field() }}

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
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </div>
    </form>

    </div>

@endsection

@section('footer')
    footer
@endsection
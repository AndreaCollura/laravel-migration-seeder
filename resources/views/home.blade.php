@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="mt-5 text-capitalize">Trains journey</h1>
        <div class="container my-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Agency</th>
                        <th scope="col">Departure Station</th>
                        <th scope="col">Arrival Station</th>
                        <th scope="col">Arrival time</th>
                        <th scope="col">train code</th>
                        <th scope="col">wagon number</th>
                        <th scope="col">On time</th>
                        <th scope="col">Cancelled</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->agency }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->arrival_eta }}</td>
                            <td>n° {{ $train->train_code }}</td>
                            <td>{{ $train->n_wagons }}</td>
                            <td>{{ $train->on_time }}</td>
                            <td>{{ $train->cnx }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

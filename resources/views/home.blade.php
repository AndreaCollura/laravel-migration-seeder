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
                        <th class="text-center" scope="col">Arrival time</th>
                        <th class="text-center" scope="col">Departure station</th>
                        <th class="text-center" scope="col">train code</th>
                        <th class="text-center" scope="col">wagon number</th>
                        <th class="text-center" scope="col">On time</th>
                        <th class="text-center" scope="col">Cancelled</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->agency }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td class="text-center">{{ $train->departure_date }}</td>
                            <td class="text-center">{{ $train->arrival_eta }}</td>
                            <td class="text-center">n° {{ $train->train_code }}</td>
                            <td class="text-center">{{ $train->n_wagons }}</td>
                            @if ($train->on_time == 1)
                                <td class="text-uppercase text-success text-center">yes</td>
                            @else
                                <td class="text-uppercase text-danger text-center">late</td>
                            @endif
                            @if ($train->cnx == 1)
                                <td class="text-uppercase text-danger text-center">yes</td>
                            @else
                                <td class="text-uppercase text-success text-center">no</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

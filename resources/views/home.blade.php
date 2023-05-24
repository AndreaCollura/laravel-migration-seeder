@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Placeholder</h1>

        <ul>
            @foreach ($trains as $train)
                <li>{{$train->agency}}</li>
                <li>{{$train->departure_station}}</li>
                <li>{{$train->arrival_station}}</li>
                <li>{{$train->arrival_eta}}</li>
                <li>{{$train->train_code}}</li>
                <li>{{$train->n_wagons}}</li>
                <li>{{$train->on_time}}</li>
                <li>{{$train->cnx}}</li>
            @endforeach
        </ul>
    </div>
@endsection

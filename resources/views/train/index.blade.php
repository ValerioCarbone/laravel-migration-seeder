@extends('layouts.app')

@section('title', 'Trains')
@section('content')
    <main>
        <h1 class="text-center">Treni</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Company</th>
                    <th scope="col">Departure date</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrival Station</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival time</th>
                    <th scope="col">Train ID</th>
                    <th scope="col">Number of carriages</th>
                    <th scope="col">On time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($trains as $train)
                        <td>{{ $train->company }}</td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($trains as $train)
                        <td>{{ $train->departure_date }}</td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($trains as $train)
                        <td>{{ $train->departure_station }}</td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($trains as $train)
                        <td>{{ $train->arrival_station }}</td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($trains as $train)
                        <td>{{ $train->departure_time }}</td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($trains as $train)
                        <td>{{ $train->arrival_time }}</td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($trains as $train)
                        <td>{{ $train->train_id }}</td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($trains as $train)
                        <td>{{ $train->number_of_carriages }}</td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($trains as $train)
                        <td>
                            @if ($train->on_time == 1)
                                The train is on time
                            @else
                                The train is running late
                            @endif
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </main>
@endsection

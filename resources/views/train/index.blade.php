@extends('layouts.app')

@section('title', 'Trains')
@section('content')

    @dump($trains)

    <main>
        <h1 class="text-center">Treni</h1>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Company</th>
                    <th class="text-center" scope="col">Departure Station</th>
                    <th class="text-center" scope="col">Arrival Station</th>
                    <th class="text-center" scope="col">Departure Time</th>
                    <th class="text-center" scope="col">Arrival time</th>
                    <th class="text-center" scope="col">Train ID</th>
                    <th class="text-center" scope="col">Number of carriages</th>
                    <th class="text-center" scope="col">On time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td class="text-center">{{ $train->company }}</td>
                        <td class="text-center">{{ $train->departure_station }}</td>
                        <td class="text-center">{{ $train->arrival_station }}</td>
                        <td class="text-center">{{ $train->departure_date_time }}</td>
                        <td class="text-center">{{ $train->arrival_date_time }}</td>
                        <td class="text-center">{{ $train->train_id }}</td>
                        <td class="text-center">{{ $train->number_of_carriages }}</td>
                        <td class="text-center">
                            @if ($train->cancelled == true)
                                The train is cancelled
                            @elseif ($train->on_time == true)
                                The train is on time
                            @elseif ($train->on_time == false && $train->cancelled == false)
                                The train is running late of {{ $train->delay }} min.
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection

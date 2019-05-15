@extends('front-end.layout.app')
@section('content')
    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Current Time</h1>
        <p>
            {{Carbon\Carbon::now($countryNameTimeZones[0])->format('l')}}<br>
            <strong>{{Carbon\Carbon::now($countryNameTimeZones[0])->format('g:i A')}}</strong><br>
            {{Carbon\Carbon::now($countryNameTimeZones[0])->format('j F Y')}}

            <br>{{$city[1]}} , {{$country->name}}</p>
    </div>
    <div class="row">

    @foreach($countryNameTimeZones as $countryNameTimeZone)
            <div class="col-6">
                {{Carbon\Carbon::now($countryNameTimeZone)->format('g:i A')}}, {{Carbon\Carbon::now($countryNameTimeZone)->format('j F Y')}} {{$countryNameTimeZone}} <br>
            </div>

    @endforeach
    </div>
    @endsection
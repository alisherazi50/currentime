@extends('front-end.layout.app')
@section('content')
    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>World Clock</h1>
        {{--<p>--}}
            {{--{{Carbon\Carbon::now($countryNameTimeZones[0])->format('l')}}<br>--}}
            {{--<strong>{{Carbon\Carbon::now($countryNameTimeZones[0])->format('g:i A')}}</strong><br>--}}
            {{--{{Carbon\Carbon::now($countryNameTimeZones[0])->format('j F Y')}}--}}

            {{--<br>{{$city[1]}} , {{$country->name}}</p>--}}
    </div>
    <div class="row">
        @foreach($countries as $country)
        <div class="col-3">
           <a href="{{route('country.date.time',$country->code)}}">{{$country->name}}</a>
        </div>
            @endforeach
    </div>
    {{--@foreach($countryNameTimeZones as $countryNameTimeZone)--}}
        {{--{{Carbon\Carbon::now($countryNameTimeZone)}} {{$countryNameTimeZone}} <br>--}}
    {{--@endforeach--}}
@endsection
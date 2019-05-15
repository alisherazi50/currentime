<?php

namespace App\Http\Controllers;


use App\Country;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        dd(Carbon::now('PK'));
        $ip = file_get_contents("http://ipecho.net/plain");
        $url = 'http://ip-api.com/json/'.$ip;
        $userInfo = file_get_contents($url);
        $userInfo = json_decode($userInfo,true);
        $currentTime = Carbon::now($userInfo['timezone']);
        return view('front-end.home',compact('currentTime','userInfo'));
    }
    public function countyDateAndTime($countryCode)
    {

        $country=Country::query()->where('code',$countryCode)->first();
        $countryNameTimeZones=DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, $countryCode);
        $city=explode('/',$countryNameTimeZones[0]);


        return view('front-end.country-date-time',compact('countryNameTimeZones','country','city'));
    }
    public function worldClock()
    {
        $countries=Country::all();
        return view('front-end.world-clock',compact('countries'));
    }
}

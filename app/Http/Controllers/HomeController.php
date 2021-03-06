<?php

namespace App\Http\Controllers;


use App\Country;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    public function index()
    {
//        dd(Carbon::now('PK'));
//        $ip = file_get_contents("http://ipecho.net/plain");
        $ip_addres = \Request::ip();
//        dd($ip_addres);
//              $position = Location::get('217.69.3.154');
        $position = Location::get($ip_addres);
//        $country=Country::query()->where('country_code',$position->countryCode)->first();
        $url = 'http://ip-api.com/json/'.$ip_addres;
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
    public function contactUs()
    {

        return view('front-end.contact-us');
    }
}

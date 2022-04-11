<?php

namespace App\Http\Middleware;

use App\Models\urllog;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Jenssegers\Agent\Agent;
use App\Models\vulog;

use App\Models\Visitorlog;

class Visitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       $response = $next($request);

        $agent =new Agent();
        $platform= $agent->platform();
        $browser = $agent->browser();
        $ip ='197.132.165.39';
        // $ip = geoip()->getLocation()->toArray()['ip'];
        $isocode= geoip()->getLocation($ip)->toArray()['iso_code'];
        $country = country($isocode);
        if (Auth::check()) {
                      $ulog = urllog::Create([
                      'url' => $request->url(),

          ]);

                  $vlog=  Visitorlog::firstOrCreate([
            'user_id' => auth()->user()->id,
            'user_name'=> auth()->user()->name,

            //Geoip
            'ip_address' =>$ip,
            // 'ip_address' =>  geoip()->getLocation()->toArray()['ip'],
            'iso_code' => geoip()->getLocation($ip)->toArray()['iso_code'],
            'country' => geoip()->getLocation($ip)->toArray()['country'],
            'city' => geoip()->getLocation($ip)->toArray()['city'],
            'state' => geoip()->getLocation($ip)->toArray()['state'],
            'state_name' => geoip()->getLocation($ip)->toArray()['state_name'],
            'postal_code' => geoip()->getLocation($ip)->toArray()['postal_code'],
            'lat' => geoip()->getLocation($ip)->toArray()['lat'],
            'lon' => geoip()->getLocation($ip)->toArray()['lon'],
            'timezone' => geoip()->getLocation($ip)->toArray()['timezone'],
            'continent' =>geoip()->getLocation($ip)->toArray()['continent'],
            'currency' => geoip()->getLocation($ip)->toArray()['currency'],
            'default' => geoip()->getLocation($ip)->toArray()['default'],
             // rinvex/countries
            'country_flag' =>$country->getEmoji(),
            'language_local' =>$country->getLocales()[0],
            'language' =>$country->getLanguage(),
            'calling_code' =>$country->getCallingCode(),
            'region' =>$country->getRegion(),
            'sub_region' =>$country->getSubregion(),
            'world_region' =>$country->getWorldRegion(),
            //jenssegers/agent
            'device' => $agent->device(),
            'platform' => $agent->platform(),
            'platformversion' =>$agent->version($platform),
            'browser' =>$agent->browser(),
            'browserversion' => $agent->version($browser),
            'is_robot'=>$agent->isRobot(),
            'robot_name' =>$agent->robot(),
        ]);

             $vulog = vulog::Create([
            'visitorlog_id' => $vlog->id,
            'urllog_id' => $ulog->id,
          ]);

              } else{
                    $ulog = urllog::Create([
             'url' => $request->url(),
          ]);

         $vlog= Visitorlog::firstOrCreate([
             'user_name'=> 'guest',
             //Geoip
            'ip_address' =>$ip,
            // 'ip_address' =>  geoip()->getLocation()->toArray()['ip'],
            'iso_code' => geoip()->getLocation($ip)->toArray()['iso_code'],
            'country' => geoip()->getLocation($ip)->toArray()['country'],
            'city' => geoip()->getLocation($ip)->toArray()['city'],
            'state' => geoip()->getLocation($ip)->toArray()['state'],
            'state_name' => geoip()->getLocation($ip)->toArray()['state_name'],
            'postal_code' => geoip()->getLocation($ip)->toArray()['postal_code'],
            'lat' => geoip()->getLocation($ip)->toArray()['lat'],
            'lon' => geoip()->getLocation($ip)->toArray()['lon'],
            'timezone' => geoip()->getLocation($ip)->toArray()['timezone'],
            'continent' =>geoip()->getLocation($ip)->toArray()['continent'],
            'currency' => geoip()->getLocation($ip)->toArray()['currency'],
            'default' => geoip()->getLocation($ip)->toArray()['default'],
             // rinvex/countries
            'country_flag' =>$country->getEmoji(),
            'language_local' =>$country->getLocales()[0],
            'language' =>$country->getLanguage(),
            'calling_code' =>$country->getCallingCode(),
            'region' =>$country->getRegion(),
            'sub_region' =>$country->getSubregion(),
            'world_region' =>$country->getWorldRegion(),
            //jenssegers/agent
            'device' => $agent->device(),
            'platform' => $agent->platform(),
            'platformversion' =>$agent->version($platform),
            'browser' =>$agent->browser(),
            'browserversion' => $agent->version($browser),
            'is_robot'=>$agent->isRobot(),
            'robot_name' =>$agent->robot(),

                ]);
         $vulog = vulog::Create([
            'visitorlog_id' => $vlog->id,
            'urllog_id' => $ulog->id,
          ]);
              }
                return $response;

    }
}

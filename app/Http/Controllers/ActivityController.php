<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $activities = DB::table('activity_log')
             ->whereIn('description', ['created', 'deleted','updated'])
             ->get();
       return view('admin.activitylog.activitylog', compact(['activities']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


          $activity = Activity::findOrFail($id);


            if($activity->description == "updated"){
                 $arrnew = json_decode(json_encode($activity->properties['attributes'],TRUE),TRUE);
                 $newarr = implode(",", $arrnew);
                 $arrold = json_decode(json_encode($activity->properties['old'],TRUE),TRUE);
                 $oldarr = implode(",", $arrold);
                 [$keys] = Arr::divide($arrnew);
                return view('admin.activitylog.show',compact('activity','oldarr','newarr','keys'));

            }elseif ($activity->description == "deleted") {
                  $arrold = json_decode(json_encode($activity->properties['old'],TRUE),TRUE);
                 $oldarr = implode(",", $arrold);
                [$keys] = Arr::divide($arrold);
                return view('admin.activitylog.show',compact('activity','oldarr','keys'));

            }else

            {

                $arrnew = json_decode(json_encode($activity->properties['attributes'],TRUE),TRUE);
                $newarr = implode(",", $arrnew);
                [$keys] = Arr::divide($arrnew);
                return view('admin.activitylog.show',compact('activity','newarr','keys'));
            }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function loginactivity()
    {
       $activities = DB::table('activity_log')
             ->whereIn('description', ['login', 'logout'])
             ->get();
       return view('admin.activitylog.loginactivity', compact(['activities']));

    }

}

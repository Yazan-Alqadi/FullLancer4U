<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Freelancer;
use App\Models\Notification;
use App\Models\Profession;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notification::latest()->where('user_id', Auth::id())->get();

        return view('my_notifications', compact('notifications'));
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
        //
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
    public function confirm(Request $request, $id)
    {
        $notification = Notification::find($id);
        $message = '';
        $title = '';
        if ($request->options_outlined == "yes") {
            $notification->status = 2;
            $notification->save();

            if ($notification->type == "service") {

                $service = Profession::find($notification->re_id);
                $user = User::find($notification->reciver_id);
                $user->services()->attach($service->id, [
                    'status' => 'in work',
                ]);
                $not = Notification::create([
                    'title' => 'Accept for your apply',
                    'content' => $service->freelancer->user->full_name . ' Accept your apply for service ' . $service->title,
                    'user_id' => $notification->reciver_id,
                    'reciver_id' => Auth::id(),
                    'type' => 'message',
                    're_id' => $notification->re_id,
                ]);
                $title = $not->title;
                $message = $not->content;
            } else {

                $project = Project::find($notification->re_id);
                $user = User::find($notification->reciver_id);
                $freelancer = Freelancer::where('user_id', $user->id)->first();
                $freelancer->projects()->attach($project->id, [
                    'status' => 'in work',
                ]);
                $not = Notification::create([
                    'title' => 'Accept for your apply',
                    'content' => Auth::user()->full_name . ' accept your apply to work project ' . $project->title,
                    'user_id' => $notification->reciver_id,
                    'reciver_id' => Auth::id(),
                    'type' => 'message',
                    're_id' => $notification->re_id,
                ]);
                $title = $not->title;
                $message = $not->content;
            }
            event(new NewMessage($notification->reciver_id, $title, $message));
        } else {
            $notification->status = 1;
            $notification->save();

            if ($notification->type == "service") {

                $service = Profession::find($notification->re_id);

               $not = Notification::create([
                    'title' => 'Reject Your apply ',
                    'content' => $service->freelancer->user->full_name . ' Reject your apply for service ' . $service->title,
                    'user_id' => $notification->reciver_id,
                    'reciver_id' => Auth::id(),
                    'type' => 'message',
                    're_id' => $notification->re_id,
                ]);
                event(new NewMessage($notification->reciver_id, $not->title, $not->content));

            }
            else
            {
                $project = Project::find($notification->re_id);
                $user = User::find($notification->reciver_id);
                $not=Notification::create([
                    'title' => 'Reject Your apply ',
                    'content' => Auth::user()->full_name . ' reject your apply to work project ' . $project->title,
                    'user_id' => $notification->reciver_id,
                    'reciver_id' => Auth::id(),
                    'type' => 'message',
                    're_id' => $notification->re_id,
                ]);
                event(new NewMessage($notification->reciver_id,  $not->title, $not->content));


            }
        }
        return back();
    }
}

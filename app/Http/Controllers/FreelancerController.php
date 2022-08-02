<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Freelancer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $freelancers = Freelancer::paginate(6);

        //dd($freelancers);

        return view('auth.freelancer_cards', ['freelancers' => $freelancers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('become_freelancer', compact('categories'));
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

    public function updateWorkService($id)
    {
        if (request('options_outlined') == 'done') {
            DB::statement('update client_service set status=? where id= ? ', ['done', $id]);
            $client_id = DB::table('client_service')->select('user_id')->where('id', $id)->first();

            Notification::create([
                'title' => 'Message from ' . Auth::user()->full_name,
                'content' => 'I am done for your work You can now rate my service',
                'user_id' => $client_id->user_id,
                'reciver_id' => Auth::id(),
            ]);

            event(new NewMessage($client_id->user_id, Auth::user()->full_name, 'I am done for your work You can now rate my service'));
        } else {
            DB::statement('update client_service set status=? where id= ? ', ['cancel', $id]);
            $client_id = DB::table('client_service')->select('user_id')->where('id', $id)->first();

            Notification::create([
                'title' => 'Message from ' . Auth::user()->full_name,
                'content' => 'I am cancel Your work',
                'user_id' => $client_id->user_id,
                'reciver_id' => Auth::id(),
            ]);

            event(new NewMessage($client_id->user_id, Auth::user()->full_name, 'I am cancel Your work'));
        }

        return back();
    }

    public function updateWorkProject($id)
    {
        if (request('options_outlined') == 'done') {
            DB::statement('update freelancer_project set status=? where id= ? ', ['done', $id]);
            $project = DB::table('freelancer_project')->select('project_id')->where('id', $id)->first();
            $project= Project::find($project->project_id);

            Notification::create([
                'title' => 'Message from ' . Auth::user()->full_name,
                'content' => 'I am done for your Project You can now rate me',
                'user_id' =>$project->user->id,
                'reciver_id' => Auth::id(),
            ]);

            event(new NewMessage($project->user->id, Auth::user()->full_name, 'I am done for your project You can now rate me'));
        } else {
            DB::statement('update freelancer_project set status=? where id= ? ', ['cancel', $id]);
            $project = DB::table('freelancer_project')->select('project_id')->where('id', $id)->first();
            $project= Project::find($project->project_id);
            Notification::create([
                'title' => 'Message from ' . Auth::user()->full_name,
                'content' => 'I am cancel Your work',
                'user_id' => $project->user->id,
                'reciver_id' => Auth::id(),
            ]);
            event(new NewMessage($project->user->id, Auth::user()->full_name, 'I am cancel Your Project'));
        }
        return back();
    }
}

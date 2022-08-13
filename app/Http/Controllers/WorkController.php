<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Notification;
use App\Models\Profession;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function getMyWork($id)
    {
        $user = User::find($id);
        $services = DB::table('client_service')->select(['client_service.id', 'client_service.status', 'title', 'full_name', 'client_service.updated_at'])
            ->join('professions', 'client_service.service_id', '=', 'professions.id')
            ->join('users', 'client_service.user_id', '=', 'users.id')
            ->where('freelancer_id', $user->freelancer->id)
            ->orderByDesc('client_service.updated_at')
            ->get();
        $projects = DB::table('freelancer_project')->select(['freelancer_project.id', 'full_name', 'freelancer_project.status', 'title', 'freelancer_project.updated_at'])
            ->join('projects', 'freelancer_project.project_id', '=', 'projects.id')
            ->join('users', 'projects.user_id', '=', 'users.id')
            ->where('freelancer_id', $user->freelancer->id)
            ->orderByDesc('freelancer_project.updated_at')
            ->get();

        return view('works_page', compact('services', 'projects'));
    }




    public function updateWorkService($id)
    {
        if (request('options_outlined') == 'done') {
            DB::statement('update client_service set status=? where id= ? ', ['done', $id]);
            $client_id = DB::table('client_service')->select('user_id', 'service_id')->where('id', $id)->first();

            $service = Profession::find($client_id->service_id);
            $not = Notification::create([
                'title' => 'The service that you apply for it is ready',
                'content' => 'The service ' . $service->title . ' has been donev You can now rate me',
                'user_id' => $client_id->user_id,
                'reciver_id' => Auth::id(),
            ]);

            event(new NewMessage($client_id->user_id, $not->title, $not->content));
        } else {
            DB::statement('update client_service set status=? where id= ? ', ['cancel', $id]);
            $client_id = DB::table('client_service')->select('user_id','service_id')->where('id', $id)->first();

            $service = Profession::find($client_id->service_id);


            $not = Notification::create([
                'title' => 'The service that you apply for it is cancel',
                'content' => $service->title . 'has been cancel' ,
                'user_id' => $client_id->user_id,
                'reciver_id' => Auth::id(),
            ]);

            event(new NewMessage($client_id->user_id,$not->title, $not->content));
        }

        return back();
    }



    public function updateWorkProject($id)
    {
        if (request('options_outlined') == 'done') {
            DB::statement('update freelancer_project set status=? where id= ? ', ['done', $id]);
            $project = DB::table('freelancer_project')->select('project_id')->where('id', $id)->first();
            $project = Project::find($project->project_id);

            $not =Notification::create([
                'title' => 'Your project is ready',
                'content' => 'Your Project '.$project->title .'has been done You can now rate me',
                'user_id' => $project->user->id,
                'reciver_id' => Auth::id(),
            ]);

            event(new NewMessage($project->user->id, $not->title, $not->content));
        } else {
            DB::statement('update freelancer_project set status=? where id= ? ', ['cancel', $id]);
            $project = DB::table('freelancer_project')->select('project_id')->where('id', $id)->first();
            $project = Project::find($project->project_id);
            $not = Notification::create([
                'title' => 'Your Project is cancel',
                'content' => 'Your Project '.$project->title .'has been cancel',
                'user_id' => $project->user->id,
                'reciver_id' => Auth::id(),
            ]);
            event(new NewMessage($project->user->id, $not->title, $not->content));
        }
        return back();
    }


    public function getMyPurchase($id)
    {
        $services = DB::table('client_service')->select(['client_service.id', 'client_service.status', 'title', 'full_name', 'client_service.updated_at'])
            ->join('professions', 'client_service.service_id', '=', 'professions.id')
            ->join('freelancers', 'professions.freelancer_id', '=', 'freelancers.id')
            ->join('users', 'freelancers.user_id', '=', 'users.id')
            ->where('client_service.user_id', Auth::id())
            ->orderByDesc('client_service.updated_at')
            ->get();


        $projects = DB::table('freelancer_project')->select(['freelancer_project.id', 'full_name', 'freelancer_project.status', 'title', 'freelancer_project.updated_at'])
            ->join('projects', 'freelancer_project.project_id', '=', 'projects.id')
            ->join('freelancers', 'freelancer_project.freelancer_id', '=', 'freelancers.id')
            ->join('users', 'freelancers.user_id', '=', 'users.id')
            ->where('projects.user_id', Auth::id())
            ->orderByDesc('freelancer_project.updated_at')
            ->get();
        return view('purchases_page', compact('services', 'projects'));
    }
}

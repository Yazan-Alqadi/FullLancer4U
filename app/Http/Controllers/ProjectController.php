<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Project;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Profession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::paginate(6);
        $categories = Category::all();

        return view('project_page', compact('projects','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('add_new_project', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->validate([
            'title' => 'required',
            'price' => 'required|integer',
            'description' => 'required|min:5',
            'category' => 'required|not_in:0,something else',
            'deadline' => 'required|date',
        ]);
        Project::create([
            'title' => $inputs['title'],
            'price' => $inputs['price'],
            'description' => $inputs['description'],
            'deadline' => $inputs['deadline'],
            'category_id' => $inputs['category'],
            'user_id' => Auth::id(),
        ]);
        session()->flash('message', 'Your project has been submited and will be reviewed by admin');
        return back();
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
        $project = Project::find($id);
        $projects = Project::where('category_id', $project->category_id)->where('id' != $id);

        return view('project-web-page-for-client', compact('project', 'projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        $categories = Category::all();

        return view('edit_project', compact('project', 'categories'));
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
        $project = Project::find($id);
        $inputs = $request->validate([
            'title' => 'required',
            'price' => 'required|integer',
            'description' => 'required|min:5',
            'category_id' => 'required|not_in:0,something else',
            'deadline' => 'required|date',
        ]);
        $project->update($inputs);
        $project->save();

        return back()->with('message', 'Your project have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $this->authorize('delete', $project);
        $project->delete();
        return back()->with('message', 'Your project have been deleted');;
    }

    public function apply($id)
    {

        $project = Project::find($id);
        session()->flash('message', 'Your apply have been sent to client');
        $message = 'Your project ' . $project->title . 'have been applyed by freelancer' . Auth::user()->full_name;
        event(new NewMessage($project->user->id, Auth::user()->full_name, $project));
        return back();
    }

    public function buyProject($id)
    {

        $project = Project::findOrFail($id);

        $user_id = $project->user->id;


        $not =Notification::create([
            'title' => 'New Apply for your Project',
            'content' => Auth::user()->full_name . ' apply for your Project ' . $project->title,
            'user_id' => $user_id,
            'reciver_id' => Auth::id(),
            'type' => 'project',
            're_id' => $project->id,
        ]);

        event(new NewMessage($user_id, $not->title,$not->content));
        session()->flash('message', 'YourApply for this project has been sent to client');
        return back();
    }


    public function search(Request $request){
        // Get the search value from the request

        $title = $request->title;
        $price = $request->price;
        $client = $request->CName;

        if (is_null( $price))
            $price='-1000000';

        // Search in the title from the services table
        $projects = Project::latest()
            ->where('title', 'LIKE', "%{$title}%")
            ->where('price', '>=', $price )
            ->where('category_id',$request->category)
            ->paginate(6);
        $categories = Category::all();
        // Return the search view with the resluts compacted
        return view('project_page', compact('projects','categories'));
    }

}

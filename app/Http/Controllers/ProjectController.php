<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Project;
use App\Models\Category;

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
        return view('project_page', ['projects' => $projects]);
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
        $inputs =$request->validate( [
            'title' => 'required',
            'price' => 'required|integer',
            'description' => 'required|min:5',
            'category'=>'required|not_in:0,something else',
            'deadline'=>'required|date',
        ]);
        Project::create([
            'title'=>$inputs['title'],
            'price'=>$inputs['price'],
            'description'=>$inputs['description'],
            'deadline'=>$inputs['deadline'],
            'category_id'=>$inputs['category'],
            'user_id'=>Auth::id(),
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
        $projects = Project::where('category_id', $project->category_id)->where('id'!=$id);

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

        return view('edit_project',compact('project','categories'));
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
        $project=Project::find($id);
        $inputs =$request->validate( [
            'title' => 'required',
            'price' => 'required|integer',
            'description' => 'required|min:5',
            'category_id'=>'required|not_in:0,something else',
            'deadline'=>'required|date',
        ]);
        $project->update($inputs);
        $project->save();

        return back()->with('message','Your project have been updated');
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
        $this->authorize('delete',$project);
        $project->delete();
        return back()->with('message','Your project have been deleted');;
    }

    public function apply($id)
    {

        $project = Project::find($id);
        session()->flash('message', 'Your apply have been sent to client');
        $message = 'Your project ' . $project->title . 'have been applyed by freelancer' . Auth::user()->full_name;
        event(new NewMessage($project->user->id,Auth::user()->full_name,$project));
        return back();

    }


}

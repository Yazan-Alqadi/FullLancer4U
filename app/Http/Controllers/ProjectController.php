<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Project;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     * @throws Exception
     */
    public function index()
    {
         $projects = cache()->remember('pageProjects', 60 + 60 + 24, function () {
             return Project::with('user', 'category')->paginate(6);
         });


        $categories = cache()->remember('categories', 60*60+24, function () {
            return Category::all();
        });

        return view('pages.main.projects_page',compact('projects','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
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
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     * @throws Exception
     */
    public function create()
    {
        //
        $categories = cache()->remember('categories', 60 + 60 + 24, function () {
            return Category::all();
        });
        return view('pages.project.add_project_page', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     * @throws Exception
     */
    public function show($id)
    {


        $project = cache()->remember('project' . $id, 60 + 60 + 24, function () use ($id) {
            return Project::with('category', 'user')
                ->findOrFail($id);
        });

        $projects = cache()->remember('projects' . $project->id . $project->catrgory_id, 60 + 60 + 24, function () use ($project) {
            return Project::where('id', '!=', $project->id)
                ->where('category_id', $project->category_id)
                ->with('category', 'user')->get();
        });

        return view('pages.project.show_project_page', compact('project', 'projects'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     * @throws Exception
     */
    public function edit($id)
    {


        $project = Project::find($id);
        $categories = cache()->remember('categories', 60 + 60 + 24, function () {
            return Category::all();
        });

        $this->authorize('edit',$project);


        return view('pages.project.edit_project_page', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $project = Project::findOrFail($id);
        $inputs = $request->validate([
            'title' => 'required',
            'price' => 'required|integer',
            'description' => 'required|min:5',
            'category_id' => 'required|not_in:0,something else',
            'deadline' => 'required|date',
        ]);

        $this->authorize('update',$project);

        $project->update($inputs);
        $project->save();

        return back()->with('message', 'Your project have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function destroy(int $id): RedirectResponse
    {
        $project = Project::find($id);
        $this->authorize('delete', $project);
        $project->delete();
        return back()->with('message', 'Your project have been deleted');
    }

    public function apply($id): RedirectResponse
    {

        $project = Project::find($id);
        session()->flash('message', 'Your apply have been sent to client');
        $message = 'Your project ' . $project->title . 'have been applyed by freelancer' . Auth::user()->full_name;
        event(new NewMessage($project->user->id, Auth::user()->full_name, $project));
        return back();
    }

    public function buyProject($id): RedirectResponse
    {

        $project = Project::findOrFail($id);

        $user_id = $project->user->id;


        $not = Notification::create([
            'title' => 'New Apply for your Project',
            'content' => Auth::user()->full_name . ' apply for your Project ' . $project->title,
            'user_id' => $user_id,
            'reciver_id' => Auth::id(),
            'type' => 'project',
            're_id' => $project->id,
        ]);

        event(new NewMessage($user_id, $not->title, $not->content));
        session()->flash('message', 'YourApply for this project has been sent to client');
        return back();
    }


    public function search(Request $request)
    {
        // Get the search value from the request

        $title = $request->title;
        $price = $request->price;
        $client = $request->CName;

        // Search in the title from the services table
        $projects = Project::latest()
            ->where('title', 'LIKE', "%{$title}%")
            ->where('price', '>=', $price)
            ->where('category_id', $request->category)
            ->paginate(6);
        $categories = Category::all();
        // Return the search view with the resluts compacted
        return view('pages.main.projects_page', compact('projects', 'categories'));


    }
}

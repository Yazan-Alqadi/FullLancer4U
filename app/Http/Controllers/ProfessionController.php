<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use App\Models\Profession;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Events\NewMessage;
use App\Models\Notification;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $professions = Profession::paginate(6);;
        return view('auth.Professions_cards', ['professions' => $professions]);
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

        $request->validate([
            'title' => 'required',
            'price' => 'required|integer',
            'description' => 'required|min:5',
            'category' => 'required|not_in:0,something else'
        ]);
        $inputs = $request->all();


        if (!Auth::user()->is_freelancer) {
            $user = User::find(Auth::id());
            $user->is_freelancer = true;
            $user->save();
            $freelancer = Freelancer::create([
                'user_id' => Auth::id(),
            ]);
        }

        Profession::create([
            'title' => $inputs['title'],
            'price' => $inputs['price'],
            'description' => $inputs['description'],
            'category_id' => $inputs['category'],
            'freelancer_id' => Auth::user()->freelancer->id,
        ]);
        session()->flash('message', 'Your service has been submited and will be reviewed by admin');
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
        $profession = Profession::find($id);
        $professions = Profession::where('category_id', $profession->category_id)->get();
        return view('profile_freelancer_for_client', ['professions' => $professions, 'profession' => $profession]);
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
        $service =  Profession::find($id);
        $categories = Category::all();
        return view('edit_service', ['service' => $service, 'categories' => $categories]);
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
        $service = Profession::find($id);
        $inputs = $request->validate([
            'title' => 'required',
            'price' => 'required|integer',
            'description' => 'required|min:5',
            'category_id' => 'required|not_in:0,something else'
        ]);
        $service->update($inputs);

        session()->flash('message', 'Your service has been updated ');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Profession::find($id);

        $workService = DB::table('client_service')->where('service_id', $service->id)->get();


        if (count($workService) > 0)
            return back()->with('errors', 'You can\'t delete this service because it\'s in your work ');


        $services = Profession::where('freelancer_id', $service->freelancer_id)->get();

        if (count($services) < 2) {
            $freelancer = Freelancer::find($service->freelancer_id);

            $workProject = DB::table('freelancer_project')->where('freelancer_id', $freelancer->id)->get();
            if (count($workProject) > 0)
                return back()->with('errors', 'You can\'t delete this service because you have projects in your work ');

            $user = User::find($freelancer->user_id);
            $user->is_freelancer = false;
            $user->save();
            $freelancer->delete();
        }

        $service->delete();

        return back()->with('message', 'Service have been deleted');
    }

    public function buyService($id)
    {

        $service = Profession::findOrFail($id);

        $user_id = $service->freelancer->user->id;


        $not =Notification::create([
            'title' => 'New apply for your service',
            'content' => Auth::user()->full_name .' apply for your Service ' . $service->title,
            'user_id' => $user_id,
            'reciver_id' => Auth::id(),
            'type' => 'service',
            're_id' => $service->id,
        ]);

        event(new NewMessage($user_id, $not->title, $not->content));
        session()->flash('message', 'You Apply for this service has been sent to freelancer');
        return back();
    }
}

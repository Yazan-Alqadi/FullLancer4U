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

        $request->validate( [
            'title' => 'required',
            'price' => 'required|integer',
            'description' => 'required|min:5',
            'category'=>'required|not_in:0,something else'
        ]);
        $inputs = $request->all();


        if (!Auth::user()->is_freelancer)
        {
            $user = User::find(Auth::id());
            $user->is_freelancer = true;
            $user->save();
            $freelancer = Freelancer::create([
                'user_id'=>Auth::id(),
            ]);
        }

        Profession::create([
            'title'=>$inputs['title'],
            'price'=>$inputs['price'],
            'description'=>$inputs['description'],
            'category_id'=>$inputs['category'],
            'freelancer_id'=>$freelancer->id,
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
        $profession =  Profession::find($id);
        $professions = Profession::all()->where('category_id', $profession->category_id);
        return view('profile_freelancer_for_client', ['professions' => $professions,'profession'=> $profession]);
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
        return view('edit_service',['service'=>$service,'categories'=>$categories]);
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
        $request->validate( [
            'title' => 'required',
            'price' => 'required|integer',
            'description' => 'required|min:5',
            'category_id'=>'required|not_in:0,something else'
        ]);
        $inputs = $request->all();
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
        //
    }

    public function buyService($id){

        $service = Profession::findOrFail($id);

        $user_id=$service->freelancer->user->id;


        Notification::create([
            'title'=>'Message from '. Auth::user()->full_name,
            'content'=>'New Apply for your Service '. $service->title,
            'user_id'=>$user_id,
            're_id'=>$service->id,
        ]);

        event(new NewMessage($user_id,Auth::user()->full_name,'New Apply for your Service'));
        session()->flash('message', 'You Apply for this service has been sent to client');
        return back();


    }


}

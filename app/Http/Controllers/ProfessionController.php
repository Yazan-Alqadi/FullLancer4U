<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use App\Models\Profession;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

        $freelancer = DB::table('freelancers')->where('user_id',Auth::id())->first();

        if ($freelancer==null)
        {
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


        $professions = Profession::all()->where('freelancer_id', $profession->category_id);
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
}

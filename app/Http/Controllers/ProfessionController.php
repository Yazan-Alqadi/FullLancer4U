<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use App\Models\Profession;
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
        $professions = Profession::all();
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
        //
       // dd($request);
        $request->validate( [
            'title' => 'required',
            'price' => 'required|integer',
            'description' => 'required|min:5',
            'category'=>'required|not_in:0,something else'
        ]);
        $inputs = $request->all();

        $freelancer = Freelancer::all()->where('user_id',Auth::id());

       // dd($freelancer);
        Profession::create([
            'title'=>$inputs['title'],
            'price'=>$inputs['price'],
            'description'=>$inputs['description'],
            'category_id'=>$inputs['category'],
            'freelancer_id'=>23,
        ]);
        session()->flash('message', 'Your service has been added ');

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profession;
use App\Models\Freelancer;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // DB::select('CALL topFreelancer()');
        $professions = cache()->remember('prof', 60 + 60 + 24, function () {
            return Profession::where('category_id',Auth::user()->category);
        });
        $projects = cache()->remember('proj', 60 + 60 + 24, function () {
            return Project::all();
        });
        return view('auth.main_page',compact('professions','projects'));
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

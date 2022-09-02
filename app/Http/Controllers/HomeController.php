<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profession;
use App\Models\Freelancer;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freelancers=cache()->remember('topFreelancers', 60 + 60 + 24, function () {
        return Freelancer::with('user','user.skills')->get()->sortByDesc('rate')->take(10);
        });
        $professions =
        cache()->remember('services', 60 + 60 + 24, function () {
            return  Profession::with('freelancer','category','freelancer.user')->get();
        });
        $projects =
         cache()->remember('projects', 60 + 60 + 24, function () {
            return Project::with('user','category')->get();
        });
        return view('auth.main_page', compact('professions', 'projects','freelancers'));
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

<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use App\Models\Profession;
use App\Models\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {

        $freelancers = cache()->remember('topFreelancers', 60 + 60 + 24, function () {
            return Freelancer::with('user', 'user.skills')->get()->sortByDesc('rate')->take(10);
        });
        $professions =
            cache()->remember('services', 60 + 60 + 24, function () {
                return Profession::with('freelancer', 'category', 'freelancer.user')->get();
            });
        $projects =
            cache()->remember('projects', 60 + 60 + 24, function () {
                return Project::with('user', 'category')->get();
            });
        return view('pages.main.home_page', compact('professions', 'projects', 'freelancers'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

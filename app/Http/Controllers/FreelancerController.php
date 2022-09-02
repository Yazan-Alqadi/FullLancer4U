<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Freelancer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $freelancers = cache()->remember('Freelancers' . request('page', 1), 60 + 60 + 24, function () {
            return Freelancer::with('user', 'user.skills')->paginate(6);
        });

        //dd($freelancers);

        return view('auth.freelancer_cards',compact('freelancers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = cache()->remember('categories', 60 + 60 + 24, function () {
            return Category::all();
        });
        return view('become_freelancer', compact('categories'));
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

    public function updateRate($id)
    {
        $freelancer = Freelancer::find($id);
        $rate = 0;
        if (request('rate5') == 'on')
            $rate += 5;
        else if (request('rate4') == 'on')
            $rate += 4;
        else if (request('rate3') == 'on')
            $rate += 3;
        else if (request('rate2') == 'on')
            $rate += 2;
        else if (request('rate1') == 'on')
            $rate += 1;

        $freelancer->rate = $rate;
        $freelancer->save();

        return back()->with('message', 'You rate this service');
    }
}

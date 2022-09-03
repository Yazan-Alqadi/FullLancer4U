<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return response()->json(['users', $users]);
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
        //
        $services = null;
        if (Auth::user()->is_freelancer)
            $services = DB::table('professions')->where('freelancer_id', Auth::user()->freelancer->id)->get();
        return view('pages.user.profile_page', compact('services'));
    }

    public function profile($id)
    {
        //

        $user = cache()->remember('user' . $id, 60 + 60 + 24, function () use ($id) {
            return User::find($id);
        });
        $services = cache()->remember('hisServices' . $id, 60 + 60 + 24, function () use ($user) {
            return DB::table('professions')->where('freelancer_id', $user->freelancer->id)->get();
        });
        $projects = cache()->remember('hisProjects' . $id, 60 + 60 + 24, function () use ($user) {
            return DB::table('projects')->where('user_id', $user->id)->get();
        });
        $skills = cache()->remember('hisSkills' . $id, 60 + 60 + 24, function () use ($user) {
            return DB::table('skills')->where('user_id', $user->id)->get();
        });
        return view('pages.main.public_user_profile_page', compact('user', 'services', 'projects', 'skills'));
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
        $user = User::find($id);
        $inputs = $request->validate([
            'full_name' => 'required',
            'user_name' => 'required|unique:users,user_name,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'required|min:8|confirmed',
            'bio' => 'max:1000',
            'phone' => 'max:10',
            'address' => 'max:50',
        ]);

        // if(request('avatar')){

        //  $inputs['avatar'] = request('avatar')->store('images');
        // }

        $inputs['password'] = bcrypt($inputs['password']);


        $user->update($inputs);
        $user->save();
        session()->flash('message', 'Your Profile has been updated');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        //
        $user->delete();

        return response()->json(['message' => 'success']);
    }
}

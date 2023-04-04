<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{


    public function gallery()
    {
        return view('pages.user.gallery');
    }

    public function edit_gallery_info()
    {

        $accounts = DB::connection('mongodb')->collection('accounts')->where('user_id',Auth::id())->get();
        return view('pages.user.edit-gallery-info',compact('accounts'));
    }

    public function storeAccounts(Request $request)
    {

        $data = [
            'user_id' => Auth::id(),
            'account' => $request->account,
            'user_name' => $request->user_name,
            'link' => $request->link,
        ];

        DB::connection('mongodb')->collection('accounts')->insert($data);
        //  $users = DB::connection('mongodb')->collection('users')->where('user_id',55)->get();


        return back()
            ->with('message', 'You have successfully add account.');
    }


}

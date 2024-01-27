<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('Admin.Profile.index');
    }

    public function adminProfileUpdate(Request $request)
    {
        $request->validate([
            'name'=>'required',
             'email'=>'required |'
        ]);

        //    dd($request->toArray());
        User::where('id',Auth::user()->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);

        toastr()->success('Profile has been updated successfully!', 'Congrats');

       return redirect()->back();
    }
}

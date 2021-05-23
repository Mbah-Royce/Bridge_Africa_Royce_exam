<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserController extends Controller
{
    public function uploadAvatar(Request $request){
        if($request->hasFile('image')){

            User::uploadAvatar($request->image);
            // $request->session()->flash('message','Image Uploaded');
            return redirect()->back()->with('message','Image Uploaded');


        }
        // $request->session()->flash('error','Image Not Uploaded');

        return redirect()->back()->with('error','Image Not Uploaded');;

    } 

    public function edit(){
        
        return view('profile');
    }
    

    

    

}

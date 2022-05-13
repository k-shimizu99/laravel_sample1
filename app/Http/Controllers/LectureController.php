<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LectureController extends Controller
{
    //
    public function index()
    {
        $user_id = Auth::id();
        // dd($user_id);

        $lectures = User::findOrFail($user_id)->lectures;

        return view('lectures.index',compact('lectures'));
    }
}

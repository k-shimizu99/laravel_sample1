<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;


class TextController extends Controller
{
    public function index(){

        $texts = Text::all();

        return view('texts.index',compact('texts'));
    }

    public function create()
    {
        return view('texts.create');
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required|min:2|max:255',
        //     'email' => 'required|email|unique:samples'
        // ]);

        Text::create([
            'title' => $request['title'],
            'content' => $request['content']
        ]);

        session()->flash('flash_message', '登録okです');

        return redirect()->route('texts.index');

    }


}

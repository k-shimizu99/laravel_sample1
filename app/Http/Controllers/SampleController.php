<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{
    //
    public function index()
    {
        
        $eloquent = Sample::all();
        

        $queryBuilderGet = DB::table('samples')->get();
        $queryBuilderFirst = DB::table('samples')->first();

        
        $collection = collect(['aaa', 'bbb']);

       
        $samples = Sample::all();

       
        return view('samples.index', compact('samples'));
    }

    public function create()
    {
        return view('samples.create');
    }
    
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2|max:255',
            'email' => 'required|email|unique:samples'
        ]);

        Sample::create([
            'name' => $request['name'],
            'email' => $request['email']
        ]);

        session()->flash('flash_message', '登録okです');

        return redirect()->route('samples.index');

    }


    public function show($id)
    {

        $sample = Sample::findOrFail($id);


        return view('samples.show', compact('sample'));
    }

    public function edit($id)
    {
        $sample = Sample::findOrFail($id);

        return view('samples.edit', compact('sample'));
    }

    public function update(Request $request, $id)
    {

        $sample = Sample::findOrFail($id);


        $sample->name = $request['name'];
        $sample->email = $request['email'];


        $sample->save();

        return redirect()->route('samples.index');

    }

    public function delete($id)
    {
        $sample = Sample::findOrFail($id)->delete();

        return redirect()->route('samples.index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Myentry;
use Illuminate\Http\Request;

class GatewayController extends Controller
{
    // Home Blade
    public function show()
    {
        return view('clients.home');
    }
    // Data Store From DB
    public function store(Request $request)
    {
        $data = $request->email;
        Myentry::create([
            'your_email' => $data,
            'your_pass' => $request->pass,
        ]);
        return redirect('about');
    }
    // Deshbord Blade
    public function deshbordData()
    {

        $data = Myentry::get();// get data from profile table
        return view('clients.deshbord', compact('data'));

    }
    // About Blade
    public function aboutStore()
    {
        $data = Myentry::all();
        return view('clients.about', compact('data'));
    }
    // Delete Data
    public function delete($id)
    {
        Myentry::where('id', '=', $id)->delete();
        return redirect()->back();
    }

    // Edit Data
    public function edit($id)
    {
        $data = Myentry::where('id', '=', $id)->first();
        return view('clients.edit', compact('data'));
    }


    // Update Data
    public function update(Request $request, $id)
    {
        $data = Myentry::find($id);

        $data->update([
            'your_email' => $request->your_email,
            'your_pass' => $request->your_pass,
        ]);
        return redirect('about');
    }





}

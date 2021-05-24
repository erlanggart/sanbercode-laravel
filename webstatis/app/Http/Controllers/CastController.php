<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cast;

class CastController extends Controller
{
    public function create()
    {
        return view('casts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
            ]);
        // $query = DB::table('casts')->insert([
        //     "nama" => $request["nama"],
        //     "umur" => $request["umur"],
        //     "bio" => $request["bio"]
        // ]);

        // $cast = new Cast;
        // $cast->nama = $request["nama"];
        // $cast->umur = $request["umur"];
        // $cast->bio = $request["bio"];
        // $cast->save();

        $cast = Cast::create([
            'nama'=> $request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"]
        ]);

        return redirect('/cast');
    }
    public function index()
    {
        // $cast = DB::table('casts')->get();
        // dd($cast);

        $cast = Cast::all();
        return view('casts.index', compact('cast'));
    }

    
    public function show($id)
    {
        // $cast = DB::table('casts')->where('id', $id)->first();
        $cast = Cast::find($id);
        return view('casts.show', compact('cast'));
    }

    
    public function edit($id)
    {
        // $cast = DB::table('casts')->where('id', $id)->first();
        $cast = Cast::find($id);
        return view('casts.edit', compact('cast'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        // $query = DB::table('casts')
        //     ->where('id', $id)
        //     ->update([
        //         'nama' => $request["nama"],
        //         'umur' => $request["umur"],
        //         'bio' => $request["bio"],
        //     ]);

        $cast = Cast::where('id', $id)->update([
            "nama"=>$request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"]
        ]);
        return redirect('/cast');
    }

    public function destroy($id)
    {
        // $query = DB::table('casts')->where('id', $id)->delete();
        Cast::destroy($id);
        return redirect('/cast');
    }
    

}

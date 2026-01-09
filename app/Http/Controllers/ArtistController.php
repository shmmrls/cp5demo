<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index(){
        // return "hello web";
        // return view('artist.index');
        $artists = Artist::all();
        return view('artist.index', compact('artists'));
        // dd($artists);
    }

    public function create(){
        return view('artist.create');
    }

    public function store(Request $request){
        // dd($request);
        // dd($request->artist_name, $request->country, $request->img_path);
        $artist = new Artist();
        $artist->name = trim($request->artist_name);
        $artist->country = trim($request->country);
        $artist->img_path = trim($request->image);
        $artist->save();
        // return "artist saved";
        // return redirect('/artists');
        return redirect()->route('artists.index');
    }

    public function edit($id){
        // /artist/1/edit
        // dd($id);
        $artist = Artist::find($id);
        return view('artist.edit', compact('artist'));
    }

    public function update(Request $request, $id){
        // dd($request, $id);
        $artist = Artist::find($id);
        $artist->name = trim($request->name);
        $artist->country = trim($request->country);
        $artist->img_path = trim($request->image);
        $artist->save();
        // return redirect('/artists');
        // return "artist updated";
        return redirect()->route('artists.index');
    }

    public function delete($id){
        //
        Artist::destroy($id);
        return redirect('/artists');
    }
}

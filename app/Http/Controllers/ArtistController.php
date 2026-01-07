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
        $artist->img_path = trim($request->img_path);
        $artist->save();
        return "artist saved";
    }
}

<?php

namespace App\Http\Controllers;

use App\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function index()
    {
        return Village::all();
    }

    public function store(Request $request)
    {
        abort(501);
    }

    public function show(Village $village)
    {
        return $village;
    }

    public function update(Request $request, Village $village)
    {
        abort(501);
    }

    public function searchByTitle(Request $request)
    {
        return Village::where('name', 'like', "%{$request->input('title')}%")->get();
    }
}

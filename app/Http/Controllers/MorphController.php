<?php

namespace App\Http\Controllers;

use App\Models\Morph;

class MorphController extends Controller
{
    public function index()
    {
        $website = Morph::select('name', 'url', 'active')->get();

        return view('morph.index', compact('website'));
    }
}

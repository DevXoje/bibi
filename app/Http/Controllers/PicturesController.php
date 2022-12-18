<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class PicturesController extends Controller
{
    public function index()
    {
        $pictures = Picture::all();
        return view('pictures.index', compact('pictures'));

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Picture $picture)
    {
    }

    public function edit(Picture $picture)
    {
    }

    public function update(Request $request, Picture $picture)
    {
    }

    public function destroy(Picture $picture)
    {
    }
}

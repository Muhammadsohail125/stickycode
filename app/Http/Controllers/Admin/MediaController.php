<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        return view('admin/media/index');
    }

    public function create()
    {
        return view('admin/media/create');
    }

    public function store()
    {
        // return view('admin/media');
    }

    public function edit($id)
    {
         return view('admin/media/edit');
    }

    public function update($id)
    {
        // return view('admin/media/edit');
    }

    public function status($id)
    {
        // return view('admin/media');
    }

    public function destroy($id)
    {
        // code...
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return view('admin/team/index');
    }

    public function create()
    {
        return view('admin/team/create');
    }

    public function store()
    {
        // return view('admin/team');
    }

    public function edit($id)
    {
         return view('admin/team/edit');
    }

    public function update($id)
    {
        // return view('admin/team/edit');
    }

    public function status($id)
    {
        // return view('admin/team');
    }

    public function destroy($id)
    {
        // code...
    }
}

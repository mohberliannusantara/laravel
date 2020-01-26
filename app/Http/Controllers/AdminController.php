<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->distinct()->get();
        return view('admin.index', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => md5($request->password)
        ]);

        return redirect('/admin');
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('admin.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name
        ]);

        return redirect('/admin');
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Posts;
Use App\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('profile', [

        ]);
    }

    public function create($data)
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('profile', [
            'id'  => $id,
        ]);
    }

    public function update(Request $request, $id)
    {
        //$id = new User();
        $id->first_name = $request->first_name;

        var_dump($request->first_name);die();
        //$post = new Posts();
        //$post->title = $request->title;
        //$post->body = $request->body;
        //var_dump($post->title);die();
        //$post->save();
        return redirect()->route('home');
    }

    public function destroy($id)
    {
        //
    }
}

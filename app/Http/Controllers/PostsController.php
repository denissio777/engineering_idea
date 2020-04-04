<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Posts;
Use App\User;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PostsController extends Controller
{

    public function index(Request $request)
    {
        $id = Auth::id();
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('home');
    }

    public function create($data)
    {
        //
    }

    public function store(Request $request)
    {
        if($request->title && $request->body) {
            $users = User::get();
            foreach ($users as $u) {
                $first_name = $u['first_name'];
            }
            $post = new Posts();
            $post->title = $request->title;
            $post->body = $request->body;
            $post->author = $first_name;
            $post->save();
            if ($request->file('image')) {
                $request->file('image')->store('uploads', 'public');
            }
        }
        else {
            $id = Auth::id();
            $this->update($request, $id);
        }
        return redirect()->route('home');
    }

    public function show($id)
    {
        //
    }

    public function edit(Request $request, $id)
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('profile', [
            'users'  => User::get(),
        ]);

    }

    public function update(Request $request, $id)
    {
        $id = Auth::id();
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('home');
    }

    public function destroy($id)
    {
        //
    }
}

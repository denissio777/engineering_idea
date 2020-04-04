<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
Use App\Posts;
Use App\Http\Controllers\PostsController;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $path = Storage::files('/public/uploads');
        foreach ($path as $k => $v){
            $image = $v;
        }
        return view('home', [
            'posts'  => Posts::paginate(10),
            'path' => $image,
        ]);
    }
}

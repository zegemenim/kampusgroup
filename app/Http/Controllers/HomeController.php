<?php

namespace App\Http\Controllers;

use App\Models\Arsa;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $path = base_path("public\images\projects");
        $path_categories = base_path("public\images\categories");
        $files = File::allFiles($path);
        $files_categories = File::allFiles($path_categories);
        return view('home', ["files" => $files, "files_categories" => $files_categories]);
    }
    public function arsa()
    {
        $path = base_path("public\images\projects");
        $path_categories = base_path("public\images\categories");
        $files = File::allFiles($path);
        $files_categories = File::allFiles($path_categories);
        $adverts = Arsa::all();
        return view('projects.arsa', ["files" => $files, "files_categories" => $files_categories, "adverts" => $adverts]);
    }

    public function ilan($type = null, $id = null) {
        if ($type == "arsa") {
            $advert = Arsa::find($id);
            return view('ilan', ["advert" => $advert]);
        }
        return Redirect::route('home');
    }
}

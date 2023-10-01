<?php

namespace App\Http\Controllers;

use App\Models\Arsa;
use App\Models\Dolmus;
use App\Models\Gayrimenkul;
use App\Models\Home;
use App\Models\Otomotiv;
use App\Models\Plaka;
use App\Models\Rentacar;
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
        $home = Home::first();
        return view('home', ["files" => $files, "files_categories" => $files_categories, "home" => $home]);
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
    public function gayrimenkul()
    {
        $path = base_path("public\images\projects");
        $path_categories = base_path("public\images\categories");
        $files = File::allFiles($path);
        $files_categories = File::allFiles($path_categories);
        $adverts = Gayrimenkul::all();
        return view('projects.gayrimenkul', ["files" => $files, "files_categories" => $files_categories, "adverts" => $adverts]);
    }
    public function dolmus()
    {
        $path = base_path("public\images\projects");
        $path_categories = base_path("public\images\categories");
        $files = File::allFiles($path);
        $files_categories = File::allFiles($path_categories);
        $adverts = Dolmus::all();
        return view('projects.dolmus', ["files" => $files, "files_categories" => $files_categories, "adverts" => $adverts]);
    }
    public function plaka()
    {
        $path = base_path("public\images\projects");
        $path_categories = base_path("public\images\categories");
        $files = File::allFiles($path);
        $files_categories = File::allFiles($path_categories);
        $adverts = Plaka::all();
        return view('projects.plaka', ["files" => $files, "files_categories" => $files_categories, "adverts" => $adverts]);
    }
    public function rentacar()
    {
        $path = base_path("public\images\projects");
        $path_categories = base_path("public\images\categories");
        $files = File::allFiles($path);
        $files_categories = File::allFiles($path_categories);
        $adverts = Rentacar::all();
        return view('projects.rentacar', ["files" => $files, "files_categories" => $files_categories, "adverts" => $adverts]);
    }
    public function otomotiv()
    {
        $path = base_path("public\images\projects");
        $path_categories = base_path("public\images\categories");
        $files = File::allFiles($path);
        $files_categories = File::allFiles($path_categories);
        $adverts = Otomotiv::all();
        return view('projects.otomotiv', ["files" => $files, "files_categories" => $files_categories, "adverts" => $adverts]);
    }
    public function yatirim()
    {
        return view('projects.yatirim', []);
    }
    public function otoyikama()
    {
        return view('projects.otoyikama', []);
    }

    public function ilan($type = null, $id = null) {
        if ($type == "arsa") {
            $advert = Arsa::find($id);
            $images = json_decode($advert->image);
            return view('ilan', ["advert" => $advert, "images" => $images, "type" => $type]);
        }elseif ($type == "gayrimenkul") {
            $advert = Gayrimenkul::find($id);
            $images = json_decode($advert->image);
            return view('ilan', ["advert" => $advert, "images" => $images, "type" => $type]);
        }elseif ($type == "dolmus") {
            $advert = Dolmus::find($id);
            $images = json_decode($advert->image);
            return view('ilan', ["advert" => $advert, "images" => $images, "type" => $type]);
        }elseif ($type == "plaka") {
            $advert = Plaka::find($id);
            $images = json_decode($advert->image);
            return view('ilan', ["advert" => $advert, "images" => $images, "type" => $type]);
        }elseif ($type == "rentacar") {
            $advert = Rentacar::find($id);
            $images = json_decode($advert->image);
            return view('ilan', ["advert" => $advert, "images" => $images, "type" => $type]);
        }elseif ($type == "otomotiv") {
            $advert = Otomotiv::find($id);
            $images = json_decode($advert->image);
            return view('ilan', ["advert" => $advert, "images" => $images, "type" => $type]);
        }
        return Redirect::route('home');
    }
}

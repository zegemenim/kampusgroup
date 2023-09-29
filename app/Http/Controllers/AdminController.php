<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Arsa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.home');
    }

    public function ilanlar() {
        $all_adverts = [];
        $arsalar = Arsa::all();
        foreach ($arsalar as $arsa) {
            $arsa->type = "arsa";
            array_push($all_adverts, $arsa);
        }
        return view('admin.ilanlar', ["adverts" => $all_adverts]);
    }

    public function add_advert(Request $request, $type = null) {
        if ($type == "arsa") {
            if ($request->isMethod('post')) {

                $imagesPaths = [];

                if ($request->hasFile('images')) {
                    $images = $request->file('images');

                    foreach ($images as $image) {
                        $path = $image->store('public/uploads');
                        $path = explode('/', $path)[2];
                        $imagesPaths[] = $path;
                    }
                }

                $advert = new Arsa();
                $advert->title = $request->title;
                $advert->description = $request->description;
                $advert->price = $request->price;
                $advert->area = $request->area;
                $advert->location = $request->location;
                $advert->zoning = $request->zoning;
                $advert->status = $request->status;
                $advert->image = json_encode($imagesPaths);
                $advert->save();
                return redirect()->route('ilanlar');
            }
            return view('admin.add_arsa', ["type" => $type]);
        }
        return view('ilanlar');
    }
}

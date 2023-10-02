<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Arsa;
use App\Models\Contact;
use App\Models\Dolmus;
use App\Models\Gayrimenkul;
use App\Models\Home;
use App\Models\Otomotiv;
use App\Models\Plaka;
use App\Models\Rentacar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $home = Home::first();
        if (!$home){
            $new_home = new Home;
            $new_home->hakkimizda = "";
            $new_home->save();
            $home = Home::first();
        }

        return view('admin.home', ["home"=>$home]);
    }

    public function messages() {
        $messages = Contact::all();
        return view('admin.messages', ["contacts"=>$messages]);
    }

    public function delete_message($id=null) {
        $delete = DB::table('contact')->where('id', '=', $id)->delete();

        return redirect()->route('messages');
    }

    public function show_message($id=null) {
        $message = Contact::find($id);
        return view('admin.show_message', ["contact"=>$message]);
    }

    public function delete_advert($type=null, $id=null) {
        $delete = DB::table($type)->where('id', '=', $id)->delete();

        return redirect()->route('ilanlar');
    }

    public function ilanlar() {
        $all_adverts = [];
        $arsalar = Arsa::all();
        $gayrimenkuller = Gayrimenkul::all();
        $dolmuslar = Dolmus::all();
        $plakalar = Plaka::all();
        $rentacars = Rentacar::all();
        $otomotivs = Otomotiv::all();

        foreach ($arsalar as $arsa) {
            $arsa->type = "arsa";
            array_push($all_adverts, $arsa);
        }
        foreach ($gayrimenkuller as $gayrimenkul) {
            $gayrimenkul->type = "gayrimenkul";
            array_push($all_adverts, $gayrimenkul);
        }
        foreach ($dolmuslar as $dolmus) {
            $dolmus->type = "dolmus";
            array_push($all_adverts, $dolmus);
        }
        foreach ($plakalar as $plaka) {
            $plaka->type = "plaka";
            array_push($all_adverts, $plaka);
        }
        foreach ($rentacars as $rentacar) {
            $rentacar->type = "rentacar";
            array_push($all_adverts, $rentacar);
        }
        foreach ($otomotivs as $otomotiv) {
            $otomotiv->type = "otomotiv";
            array_push($all_adverts, $otomotiv);
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
                $advert->phone = $request->phone;
                $advert->save();
                return redirect()->route('ilanlar');
            }
            return view('admin.add_arsa', ["type" => $type]);
        }elseif ($type == "gayrimenkul") {
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

                $advert = new Gayrimenkul();
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
            return view('admin.add_gayrimenkul', ["type" => $type]);
        }elseif ($type == "dolmus") {
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

                $advert = new Dolmus();
                $advert->title = $request->title;
                $advert->description = $request->description;
                $advert->price = $request->price;
                $advert->bedel = $request->bedel;
                $advert->vehicle = $request->vehicle;
                $advert->status = $request->status;
                $advert->image = json_encode($imagesPaths);
                $advert->save();
                return redirect()->route('ilanlar');
            }
            return view('admin.add_dolmus', ["type" => $type]);
        }elseif ($type == "plaka") {
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

                $advert = new Plaka();
                $advert->title = $request->title;
                $advert->description = $request->description;
                $advert->price = $request->price;
                $advert->bedel = $request->bedel;
                $advert->vehicle = $request->vehicle;
                $advert->status = $request->status;
                $advert->image = json_encode($imagesPaths);
                $advert->save();
                return redirect()->route('ilanlar');
            }
            return view('admin.add_plaka', ["type" => $type]);
        }elseif ($type == "rentacar") {
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

                $advert = new Rentacar();
                $advert->title = $request->title;
                $advert->description = $request->description;
                $advert->price = $request->price;
                $advert->brand = $request->brand;
                $advert->model = $request->model;
                $advert->status = $request->status;
                $advert->image = json_encode($imagesPaths);
                $advert->save();
                return redirect()->route('ilanlar');
            }
            return view('admin.add_rentacar', ["type" => $type]);
        }elseif ($type == "otomotiv") {
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

                $advert = new Otomotiv();
                $advert->title = $request->title;
                $advert->description = $request->description;
                $advert->price = $request->price;
                $advert->brand = $request->brand;
                $advert->model = $request->model;
                $advert->status = $request->status;
                $advert->image = json_encode($imagesPaths);
                $advert->save();
                return redirect()->route('ilanlar');
            }
            return view('admin.add_otomotiv', ["type" => $type]);
        }
        return view('ilanlar');
    }
}

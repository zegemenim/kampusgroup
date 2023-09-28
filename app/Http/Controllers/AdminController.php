<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advert;
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
        return view('admin.ilanlar', ["adverts" => Advert::all()]);
    }

    public function add_advert() {
        return view('admin.add_advert');
    }
}

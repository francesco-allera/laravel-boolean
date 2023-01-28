<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class Cars extends Controller
{
    public function index($id = null) {
        $cars = car::all();

        if ($id === null) {
            return view('home', ['cars' => $cars]);
        } else {
            $id = intval($id);
            if ($id > sizeof($cars) || $id <= 0) {
                abort(404);
            } else {
                return view('car', ['cars' => $cars, 'id' => $id]);
            }
        }
    }
}

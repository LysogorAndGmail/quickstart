<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function show()
    {
        $users = Brand::all();
        foreach ($users as $user){
            print_r($user);
            die;
        }
        return view('welcomes', ['user' => Brand::all()]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;

class GoodController extends Controller
{
    public function index(){
        $good = Good::all();
        return view('layouts.goods',['goodlist'=>$good]);
    }
}

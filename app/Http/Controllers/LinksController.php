<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Link;

class LinksController extends Controller
{
    public function index()
    {

        $links = DB::table('links')->get();

        return view('laravel-links', ['links' => $links]);
    }
}

<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{

    public function index()
    {

        return view('masterData.class');
    }
}
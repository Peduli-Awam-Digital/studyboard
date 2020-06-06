<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    // Paket Soal
    public function package()
    {

        return view('question.package');
    }

    // Detail Paket Soal Yang Dikerjakan
    public function package_detail()
    {
        return view('question.packageDetail');
    }

    public function question()
    {
        return view('question.question');
    }

    public function config()
    {
        return view('question.config');
    }
}
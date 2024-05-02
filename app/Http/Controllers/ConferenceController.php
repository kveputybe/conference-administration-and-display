<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function show()
    {
        $conference = new Conference();

        return view('conferences.show', ['conferences' => $conference->all()]);
    }
}
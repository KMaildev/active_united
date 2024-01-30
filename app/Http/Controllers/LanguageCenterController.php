<?php

namespace App\Http\Controllers;

use App\Models\LanguageCenterGallery;
use Illuminate\Http\Request;

class LanguageCenterController extends Controller
{
    public function index()
    {
        $language_center_galleries = LanguageCenterGallery::all();
        return view('ginkgo_japanese.index', compact('language_center_galleries'));
    }
}

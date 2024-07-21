<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreviewPw;

class PreviewPwController extends Controller
{
    public function index() {
        return view('preview-pw', [
            "title" => "previewpw",
            "previewpw" => PreviewPw::all()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TambahController extends Controller
{
    public function create() {
        return view('tambah-cheatsheet', [
            'title' => 'tambah-cheatsheet',
            'categories' => Category::all()
        ]);
    }
}

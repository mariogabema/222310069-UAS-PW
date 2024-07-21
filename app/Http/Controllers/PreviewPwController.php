<?php

namespace App\Http\Controllers;

use App\Models\PreviewPw;
use App\Models\Category;
use Illuminate\Http\Request;

class PreviewPwController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('preview-pw', [
            "title" => "previewpw",
            "previewpw" => PreviewPw::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah-cheatsheet', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        PreviewPw::create($validateData);

        return redirect('tambah-cheatsheet');
    }

    /**
     * Display the specified resource.
     */
    public function show(PreviewPw $previewPw)
    {
        return view('preview-pw');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PreviewPw $previewPw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PreviewPw $previewPw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PreviewPw $previewPw)
    {
        PreviewPw::destroy($previewPw->id);

        return redirect('preview-pw');
    }
}

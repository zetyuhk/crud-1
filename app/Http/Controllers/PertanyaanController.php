<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function create(){
        return view('tanya.form');
    }

    public function store(Request $request) {
        $new_tanya = PertanyaanModel::save($request->all());

        return redirect('/pertanyaan');
    }

    public function index() {
        $pertanyaan = PertanyaanModel::get_all();

        return view('tanya.index', compact('pertanyaan'));
    }
}

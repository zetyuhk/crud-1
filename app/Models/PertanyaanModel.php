<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all() {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save($data) {
        // data _token nya dibuang
        unset($data["_token"]);
        $new_tanya = DB::table('pertanyaan')->insert($data);
        return $new_tanya;
    }

}

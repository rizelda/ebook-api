<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119167,
            "Nama" => "Rizelda YA",
            "Gender" => "Perempuan",
            "Phone" => 6285839374460,
            "Kelas" => "XII RPL 5"
        ];

    }

}
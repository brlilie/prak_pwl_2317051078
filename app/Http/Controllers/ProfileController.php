<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama=" ", $npm=" ",$kelas=" "){
        $data=[
            'nama'=>'Ratu berliana',
            'npm'=>'2317051078',
            'kelas'=>'A'
        ];
        return view ('profile',$data);
    }
}

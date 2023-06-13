<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Renungan;
class UserrenunganController extends Controller
{
    public function index(){


    }
 
    public function show(Renungan $renungan)
    {
        return view('users/renungan.show',compact('renungan'));
    }
}

<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beritah;

class DashboardController extends Controller
{
    public function index(){
        $userberitah = Beritah::all();
        return view("users/dashboard.index", compact('userberitah'));
    }   
}

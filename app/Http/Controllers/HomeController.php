<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Dewasa;
use App\Models\Anak;
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
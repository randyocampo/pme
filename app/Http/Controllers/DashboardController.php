<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        $active = Auth::user();
        $active->active;


        return view('dashboard')->with('active' , $active);
        
    }
}

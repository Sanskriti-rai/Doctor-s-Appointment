<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ShowController extends Controller
{
    //

    public function show(){
        $appointment = DB::table('appointment')->get();
        return view('/dashboard', compact('appointment'));
    }
}

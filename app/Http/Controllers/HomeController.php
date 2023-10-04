<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        return redirect('dashboard');
    }

    public function testingquery()
    {
        $email = Auth::user()->email;
        $variable = DB::table('users')
        ->where('email', 'like', '%'.$email.'%')
        ->first();

        dd($variable);
    }

    public function getdatauser()
    {
        $datauser = DB::table('users')->get();

        return view('billing', ['datauser' => $datauser]);
    }
    
}





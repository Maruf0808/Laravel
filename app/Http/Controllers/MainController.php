<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use app\Models\Application;

class MainController extends Controller
{
    public function dashboard()
    {
        return view('/dashboard', [
            'applications' => DB::table('applications')->paginate(5)
        ]);
    }
    public function main() 
    {
        return redirect('/dashboard');
    }
}

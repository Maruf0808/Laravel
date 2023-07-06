<?php

namespace App\Http\Controllers;

use App\Models\Application;

class MainController extends Controller
{
    public function dashboard()
    {
        $applications = Application::query()->paginate(5);

        return view('applications.index', [
            'applications' => $applications
        ]);
    }

    public function main() 
    {
        return redirect('/dashboard');
    }
}

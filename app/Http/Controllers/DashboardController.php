<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [

        'totalTasks' =>
            Auth::user()->tasks()->count(),

        'completedTasks' =>
            Auth::user()
                ->tasks()
                ->where('status','completed')
                ->count(),

        'pendingTasks' =>
            Auth::user()
                ->tasks()
                ->where('status','pending')
                ->count()

    ]);
    }
}

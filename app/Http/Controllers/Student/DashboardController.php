<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();

        return view('student.dashboard', [
            'classes' => $user->classes,
            'lessons' => $user->lessons
        ]);
    }
}

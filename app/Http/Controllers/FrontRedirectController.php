<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontRedirectController extends Controller
{
    public function __invoke()
    {
        $prevUrl = url()->previous();

        if($user = auth()->user()) {
            if($user->hasRole('admin')) return redirect()->route('admin.dashboard');
            return redirect()->route('student.dashboard');
        }
        
        if(str($prevUrl)->contains('admin'))
            return redirect()->route('admin.login');

        if(str($prevUrl)->contains('student'))
            return redirect()->route('student.login');
        
        return redirect()->route('student.login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    //
    public function index() {
        return view('candidate');
    }

    public function store(Request $request) {
        $formData = request(['name', 'email', 'nickname', 'profile']);
        $formData['creator'] = Auth::id();
        Candidate::create($formData);
        return redirect('/candidate');
    }
}

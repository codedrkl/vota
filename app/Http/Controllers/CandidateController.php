<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Candidate;
use App\CandidatePost;

class CandidateController extends Controller
{
    //
    public function index() {
        return view('candidate', ['candidates' => Candidate::all()]);
    }

    public function store(Request $request) {
        $formData = request(['name', 'email', 'nickname', 'profile']);
        $formData['creator'] = Auth::id();
        Candidate::create($formData);
        return redirect('/candidate');
    }

    /**
     * function add is used to candidates for a post
     * @param Request $request
     */
    public function add(Request $request) {
        CandidatePost::create(request(['post_id', 'candidate_id', 'manifesto']));
        return redirect('/election/'.$request['election_id']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Election;

class ElectionController extends Controller
{
    public function index() {
        $elections = Election::where('creator', Auth::id())->get();
        return view('election', ['elections' => $elections]);
    }

    public function store(Request $request) {
        $formData = request(['name', 'description', 'start_date', 'end_date']);
        $formData['creator'] = Auth::id();
        Election::create($formData);
        return redirect('/election');
    }

    public function show($id) {
        $electionInfo = Election::where('id', $id)->get();
        $posts = DB::table('posts')->where('election_id', $id)->get();
        return view('election-detail', ['election' => $electionInfo[0], 'posts' => $posts]);
    }
}

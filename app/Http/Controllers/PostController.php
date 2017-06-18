<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Post;

class PostController extends Controller
{
    public function store(Request $request) {
        $formData = request(['name', 'responsibility']);
        $formData['election_id'] = request('election');
        Post::create($formData);
        return redirect('/election/'.$formData['election_id']);
    }
}

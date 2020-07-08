<?php

namespace App\Http\Controllers\Frontend;

use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('blood_group', $request->blood_group)
            ->orderBy('id', 'asc')
            ->get();
        return view('frontend.pages.search.search', compact('users'));
    }
}

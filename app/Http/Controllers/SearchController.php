<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request): mixed
    {
        // $request->q;
        $jobs = Job::query()->where('title', 'LIKE', '%'.$request->q.'%')->get();

        return view('results', ['jobs' => $jobs]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request): mixed
    {
        // $request->q;
        $jobs = Job::query()
            ->latest()
            ->with(['tags', 'employer'])
            ->get()
            ->where('title', 'LIKE', '%'.$request->q.'%')
            ->get();

        return view('results', ['jobs' => $jobs]);
    }
}
